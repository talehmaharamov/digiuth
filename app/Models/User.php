<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

//    protected $appends = ['fullname'];

    protected $guarded = [];

    public function user_exams()
    {
        return $this->hasMany(UserExam::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function course_comments()
    {
        return $this->hasMany(CourseComment::class);
    }
}
