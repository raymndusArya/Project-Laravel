<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        $students = \App\Models\Student::all();

        return view('admin.student', [
            'title' => 'Students',
            'students' => $students,
        ]);
    }
}
