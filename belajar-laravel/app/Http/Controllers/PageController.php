<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    
    public function home()
    {
        $data['judul'] = 'Dashboard';
        return view('dashboard', $data);
    }

    public function data_mahasiswa()
    {
        $judul = 'Data Mahasiswa';
        $data_mahasiswa = mahasiswa::orderBy('nama', 'asc')->get();
        $data = [
            'judul' => $judul,
            'data_mahasiswa' => $data_mahasiswa
        ];
        return view('data-mahasiswa', $data);
    }

    public function tambah_mahasiswa()
    {
        $data['judul'] = 'Form Tambah Mahasiswa';
        return view('form-mahasiswa', $data);
    }

    public function simpan_mahasiswa(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'nim' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'semester' => 'required',
            'jurusan' => 'required'
        ], [
            'nim.required' => 'NIM Wajib diisi',
            'nama.required' => 'Nama wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'no_telp.required' => 'No Telepon wajib diisi',
            'semester.required' => 'Semester wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $value_field = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'semester' => $request->semester,
            'jurusan' => $request->jurusan
        ];

        $simpan = mahasiswa::create($value_field);
        if($simpan) {
            Alert::success('Berhasil', 'Data mahasiswa berhasil disimpan');
            return redirect('/data-mahasiswa');
        }

        Alert::error('Gagal', 'Data mahasiswa gagal disimpan');
        return redirect('/tambah-mahasiswa');
    }

    public function hapus_mahasiswa($id)
    {
        $hapus = mahasiswa::where('id', $id)->delete();
        if($hapus) {
            Alert::success('Berhasil', 'Data mahasiswa berhasil dihapus');
            return redirect('/data-mahasiswa');
        }

        Alert::error('Gagal', 'Data mahasiswa gagal dihapus');
        return redirect('/data-mahasiswa');
    }

}
