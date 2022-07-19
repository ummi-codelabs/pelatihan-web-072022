@extends('layout')

@section('content')
    <h4>Form Tambah Data</h4>

    <form action="{{ route('student.store') }}" method="post">
    @csrf

    <label for="nim">NIM</label>
    <br>
    <input type="text" name="nim" value="{{ old('nim') }}" required>
    <br>
    @error('nim')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br>

    <label for="nama">Nama</label>
    <br>
    <input type="text" name="nama" value="{{ old('nama') }}" required>
    <br>
    @error('nama')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <br>
    <button type="submit">Save</button>

    </form>

@endsection
