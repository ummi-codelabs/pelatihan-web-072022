<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // menampilkan view
        // dengan nama file student.blade.php
        // $nama = 'Gun Gun';
        // $nim = '143011105';
        $mahasiswa = $this->getData();
        // var_dump($mahasiswa);
        // $mahasiswa = [];

        // print_r($mahasiswa);

        return view('student', compact('mahasiswa'));
    }

    public function create()
    {
        return view('create_student');
    }

    public function store(Request $request)
    {
        // validasi
        $this->validate($request, [
            'nim' => 'required|min:3|max:10',
            'nama' => 'required',
        ]);

        // tampilkan inputan dari form
        // echo $request->nim;
        // echo '<br>';
        // echo $request->nama;

        echo $request->get('nim');

        // // simpan data
        // Student::create([
        //     'nim' => $request->nim,
        //     'nama' => $request->nama
        // ]);

        // // redirect ke halaman daftar mahasiswa
        // return redirect()->route('student.index');

    }

    public function show($id)
    {
        echo $id;
    }

    private function getData()
    {
        return [
            [
                'id' => 1,
                'nim' => '2030511012',
                'nama' => 'Billy dhozan'
            ],
            [
                'id' => 2,
                'nim' => '2030511062',
                'nama' => 'Rival haikal hafizh'
            ],

        ];
    }
}
