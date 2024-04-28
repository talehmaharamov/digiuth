<?php

namespace App\Http\Controllers;

use App\Enum\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher');
    }

    public function register(Request $request)
    {
        $vd = $request->validate([
            'email' => 'email:filter|nullable|unique:users,email',
            'phone' => 'min:10|numeric|nullable',
            'fullname' => 'min:3|required',
            'username' => 'min:3|required|unique:users,username',
            'password' => 'required|confirmed|min:8',
            'content' => 'nullable',
            'cv' => 'required|mimes:jpg,png,jpeg,svg,webp'
        ]);

        try {

            $user = User::create([
                ...$vd,
                'content' => $request->has('content') ? $request->content : null,
                'cv' => Storage::disk('public')->put('/', $request->file('cv')),
                'password' => Hash::make($request->password),
                'status' => 'teacher',
                'is_active' => false
            ]);

            \Auth::login($user);

            return redirect()->to('/');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
