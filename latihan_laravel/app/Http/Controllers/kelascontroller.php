<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class kelascontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kelas(){
        $halaman = 'kelas';
        $kelas_list = Kelas::all();
        return view('kelas.index', compact('halaman', 'kelas_list'));
    }

    public function tambahkls() {
        $halaman = 'kelas';
        return view('kelas.tambahkls', compact('halaman'));
    }

    public function store(Request $request) {
        Kelas::create($request->all());
        return redirect('kelas');
    }
    public function detailkelas($id) {
        $halaman = 'Kelas';
        $kelas = kelas::findOrFail($id);
        return view('kelas.detailkelas', compact('halaman','kelas'));
    }
    public function delete($id) {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect('kelas');
    }
    public function editkls($id) {
        $halaman = 'kelas';
        $kelas = Kelas::findOrFail($id);
        return view('kelas.editkls', compact('halaman','kelas'));
    }
    public function updatekelas($id, Request $request) {
        $halaman = 'kelas';
        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->all());
        $kelas->save();
        return redirect('kelas');
    }
    public function deletekls($id) {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect ('kelas');
    }
}