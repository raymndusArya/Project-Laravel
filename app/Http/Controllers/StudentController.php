<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['nis' => '20260001', 'name' => 'Nama 1',  'classroom' => 'X RPL 1'],
            ['nis' => '20260002', 'name' => 'Nama 2',  'classroom' => 'X RPL 1'],
            ['nis' => '20260003', 'name' => 'Nama 3',  'classroom' => 'X RPL 2'],
            ['nis' => '20260004', 'name' => 'Nama 4',  'classroom' => 'X TKJ 1'],
            ['nis' => '20260005', 'name' => 'Nama 5',  'classroom' => 'X TKJ 1'],
            ['nis' => '20260006', 'name' => 'Nama 6',  'classroom' => 'XI RPL 1'],
            ['nis' => '20260007', 'name' => 'Nama 7',  'classroom' => 'XI RPL 2'],
            ['nis' => '20260008', 'name' => 'Nama 8',  'classroom' => 'XI TKJ 1'],
            ['nis' => '20260009', 'name' => 'Nama 9',  'classroom' => 'XI TKJ 2'],
            ['nis' => '20260010', 'name' => 'Nama 10', 'classroom' => 'XII RPL 1'],
            ['nis' => '20260011', 'name' => 'Nama 11', 'classroom' => 'XII RPL 2'],
            ['nis' => '20260012', 'name' => 'Nama 12', 'classroom' => 'XII TKJ 1'],
        ];

        return view('admin.student', [
            'title'    => 'Students',
            'students' => $students,
        ]);
    }
}
