@extends('layout')

@section('css')

@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <h4>Daftar Mahasiswa</h4>
        </div>

        <div class="col-12">
            <a href="{{ route('student.create') }}" class="btn btn-primary float-end">Tambah data</a>
        </div>

        <div class="col-12">
            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif

            <table class="table table bordered table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>NIM</td>
                        <td>Nama</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = (request()->get('page', 1) - 1) * 2;
                    @endphp

                    @forelse ( $mahasiswa as $row )
                    <tr>
                        <td>{{ ++$no; }}</td>
                        <td>{{ $row->nim; }}</td>
                        <td>{{ $row->nama; }}</td>
                        <td>
                            <form action="{{ route('student.destroy', $row->id) }}" method="post" onsubmit="return confirm('apakah anda yakin?');">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('student.edit', $row->id) }}" class="btn btn-info">Edit</a>

                                <button class="btn btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
        <div class="col-12">
            {{ $mahasiswa->links(); }}
        </div>
    </div>


@endsection

@section('js')

@endsection
