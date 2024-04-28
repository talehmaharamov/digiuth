<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function all_trainers()
    {
        $trainers = User::where('status', 'teacher')->where('is_active', true)->orderBy('id', 'desc')->paginate(12);
        return view('trainers.all', compact('trainers'));
    }

    public function single_trainer($id, $slug)
    {
        $team = User::where('status', 'teacher')->where('is_active', true)->where('id', $id)->firstOrFail();
        
        $students = 0 ;
        
        $ratings = 0;
        
        $rating_count = 0;
        
        $courses = Course::where('user_id', $team->id)->get();
        
        foreach($courses as $course) {
            $students += count($course->course_users);
            
            foreach($course->course_reviews as $review) {
                $ratings += $review->review;
                $rating_count ++;
            }
        }
        
        
        $rating = $ratings / ($rating_count == 0 ? 1 : $rating_count);
        
        $rating = number_format($rating, 2);
        
        return view('trainers.single', compact('team', 'students', 'rating'));
    }
}
