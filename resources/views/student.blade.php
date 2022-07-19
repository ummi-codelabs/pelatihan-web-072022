@extends('layout')

@section('css')

@endsection

@section('content')
    <h4>Daftar Mahasiswa</h4>
    <br>
    <a href="{{ route('student.create') }}">Tambah data</a>
    <br>

    <table border='1' width="50%" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <td>No</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ( $mahasiswa as $row )
                <tr>
                    <td>{{ $row['id']; }}</td>
                    {{-- <td><?php // echo $row['id']; ?></td> --}}
                    <td>{{ $row['nim']; }}</td>
                    <td>{{ $row['nama']; }}</td>
                    <td>action</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>

    </table>
@endsection

@section('js')

@endsection
