<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // menampilkan view
        // dengan nama file student.blade.php
        $nama = 'Gun Gun';
        $nim = '143011105';

        return view('student', compact('nama', 'nim')); // hasil dari function compact berupa array ['nama' => $nama, 'nim' => $nim]
    }

    public function show($id)
    {
        echo $id;
    }
}
