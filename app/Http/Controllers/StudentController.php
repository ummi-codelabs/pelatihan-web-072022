<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // import class model

class StudentController extends Controller
{
    public function index()
    {
        // menampilkan view
        // dengan nama file student.blade.php
        // $nama = 'Gun Gun';
        // $nim = '143011105';
        $mahasiswa = Student::orderBy('id', 'ASC')->paginate(2);
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

        // echo $request->get('nim');
        $student = Student::create([
            'nim' => $request->nim,
            'nama' => $request->nama
        ]);

        return redirect()->route('student.index')
            ->with('success', 'Data mahasiswa berhasil disimpan.');

    }

    public function edit($id)
    {
        // ambil data berdasarkan id
        $mahasiswa = Student::findOrFail($id);

        // tampilkan view form halaman edit data
        return view('edit_student', compact('mahasiswa'));

    }

    public function update(Request $request, $id)
    {
        // validasi
        $this->validate($request, [
            'nim' => 'required|min:3|max:15',
            'nama' => 'required'
        ]);

        // ambil data berdasarkan id
        $mahasiswa = Student::findOrFail($id);

        // update data
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama
        ]);

        // redirect ke halaman daftar mahasiswa
        return redirect()->route('student.index')
            ->with('success', 'Data berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        // ambil data berdasarkan id
        $mahasiswa = Student::findOrFail($id);

        // proses delete
        $mahasiswa->delete();

        // redirect ke halaman daftar mahasiswa
        return redirect()->route('student.index')
            ->with('success', 'Data berhasil dihapus.');

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
