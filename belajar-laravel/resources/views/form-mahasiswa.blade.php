@extends('layout')
@section('content')

<h1 class="h3 mb-2 text-gray-800">{{ $judul }}</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ url('/data-mahasiswa') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
    </div>
    @if (count($errors) > 0)
    @php
        $validate_err = $errors->all();
    @endphp
    @endif
    <div class="card-body">
        <form method="POST" action="{{ url('/simpan-mahasiswa') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">NIM</label>
                <input type="text" class="form-control" name="nim" id="exampleInputEmail1" aria-describedby="emailHelp">
                @if (!empty($validate_err[0])) <small class="text-danger">{{ $validate_err[0] }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                @if (!empty($validate_err[1])) <small class="text-danger">{{ $validate_err[1] }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
                @if (!empty($validate_err[2])) <small class="text-danger">{{ $validate_err[2] }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">No Telepon</label>
                <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1">
                @if (!empty($validate_err[2])) <small class="text-danger">{{ $validate_err[2] }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Semester</label>
                <input type="number" name="semester" class="form-control" id="exampleInputPassword1">
                @if (!empty($validate_err[3])) <small class="text-danger">{{ $validate_err[3] }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jurusan</label>
                <select name="jurusan" id="" class="form-control">
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Ekonomi">Ekonomi</option>
                </select>
                @if (!empty($validate_err[4])) <small class="text-danger">{{ $validate_err[4] }}</small>@endif
            </div>
            <hr>
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Simpan</button>
        </form>
    </div>
</div>

@endsection