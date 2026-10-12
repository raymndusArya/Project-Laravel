<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classroom = Classroom::all();
        return view('admin.classroom', compact('classroom'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Classroom $classroom)
    {
        //
    }

    public function edit(Classroom $classroom)
    {
        //
    }

    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    public function destroy(Classroom $classroom)
    {
        //
    }
}
