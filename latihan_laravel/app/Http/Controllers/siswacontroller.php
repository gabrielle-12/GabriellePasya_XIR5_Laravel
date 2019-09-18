<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use PDF;

class siswacontroller extends Controller
{ 
        public function __construct() {
            $this->middleware('auth');
        }
        public function siswa() {
            $halaman = 'Siswa';
            $siswa_list = siswa::all();
            return view('siswa.index', compact('halaman', 'siswa_list'));
        }
        public function create() {
            $halaman = 'Siswa';
            $kelas = Kelas::all();
            return view('siswa.create', compact('halaman', 'kelas'));
        }
        public function store(Request $request) {
            Siswa::create($request->all());
            return redirect('siswa');
        }
        public function show($id) {
            $halaman = 'Siswa';
            $siswa = siswa::findOrFail($id);
            return view('siswa.show', compact('halaman','siswa'));
        }
        public function edit($id) {
            $halaman = 'siswa';
            $siswa = Siswa::findOrFail($id);
            return view('siswa.edit', compact('halaman','siswa'));
        }
        public function update($id, Request $request) {
            $halaman = 'siswa';
            $siswa = Siswa::findOrFail($id);
            $siswa->nisn = $request->nisn;
            $siswa->nama_siswa = $request->nama_siswa;
            $siswa->tanggal_lahir = $request->tanggal_lahir;
            $siswa->jenis_kelamin = $request->jenis_kelamin;
            if($request->hasFile('avatar')){
                $request->file('avatar')->move('img/',$request->file('avatar')->getClientOriginalName());
                $siswa->avatar = $request->file('avatar')->getClientOriginalName();
               
            }
            $siswa->save();
            return redirect('siswa');
        }
        public function delete($id) {
            $siswa = Siswa::findOrFail($id);
            $siswa->delete();
            return redirect ('siswa');
        }
        public function profile($id) {
            $siswa = \App\Siswa::find($id);
            return view('siswa.profile',['siswa' => $siswa]);
        }
        public function cetak()
        {
            $siswa_list = Siswa::all();
            $pdf = PDF::loadview('siswa.siswa_pdf',['siswa_list'=>$siswa_list]);
            return $pdf->download('laporan-siswa-pdf');
        }
}
?>