<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Guru;

class gurucontroller extends Controller
{
    public function __construct() {
        
        $this->middleware('auth');
    }
    public function guru() {
        $halaman = 'Guru';
        $guru_list = Guru::all();
        $jumlah_guru = Guru::count();
        return view('guru.guru', compact('halaman', 'guru_list', 'jumlah_guru'));
    }
    public function createguru() {
        $halaman = 'Guru';
        return view('guru.createguru', compact('halaman'));
    }
    public function store(Request $request) {
        Guru::create($request->all());
        return redirect('guru');
    }
    public function show($id_guru) {
        $halaman = 'Guru';
        $guru = Guru::findOrFail($id_guru);
        return view('guru.detailguru', compact('halaman','guru'));
    }
    public function delete($id_guru) {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect ('guru');
    }
    public function edit($id_guru) {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id_guru);
        return view('guru.edit', compact('halaman','guru'));
    }
    public function update($id_guru, Request $request) {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id_guru);
        $guru->nip = $request->nip;
        $guru->nama_guru = $request->nama_guru;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->save();
        return redirect('guru');
    }
}