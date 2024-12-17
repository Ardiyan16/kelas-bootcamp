@extends('layout')
@section('content')

<h1 class="h3 mb-2 text-gray-800">{{ $judul }}</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ url('/tambah-mahasiswa') }}" class="btn btn-primary btn-sm"><i class="fa fa-circle-plus"></i> Tambah Mahasiswa</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>No Telepon</th>
                        <th>Semester</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data_mahasiswa as $value)     
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->nim }}</td>
                            <td>{{ $value->nama }}</td>
                            <td>{{ $value->no_telp }}</td>
                            <td>{{ $value->semester }}</td>
                            <td>{{ $value->jurusan }}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm" title="edit"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('/hapus-mahasiswa/'. $value->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"  class="btn btn-danger btn-sm" title="hapus"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection
