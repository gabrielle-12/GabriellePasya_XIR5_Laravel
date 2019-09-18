<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walikelas;
use App\Guru;
use App\Kelas;

class walikelascontroller extends Controller
{ 
        public function __construct() {
            $this->middleware('auth');
        }
        public function walikelas() {
            $halaman = 'walikelas';
            $walikelas_list = walikelas::all();
            return view('walikelas.index', compact('halaman', 'walikelas_list'));
        }
        public function createwali() {
            $halaman = 'Walikelas';
            $guru = Guru::all();
            $kelas = Kelas::all();
            return view('walikelas.createwali', compact('halaman','guru','kelas'));
        }
        public function store(Request $request) {
            Walikelas::create($request->all());
            return redirect('walikelas');
        }
        public function show($id) {
            $halaman = 'Walikelas';
            $walikelas = walikelas::findOrFail($id);
            return view('walikelas.detailwali', compact('halaman','walikelas'));
        }
        public function editwali($id) {
            $halaman = 'Walikelas';
            $guru = Guru::all();
            $kelas = Kelas::all();
            $walikelas = Walikelas::findOrFail($id);
            return view('walikelas.editwali', compact('halaman', 'guru', 'kelas','walikelas'));
        }
        public function updatewali($id, Request $request) {
            $halaman = 'walikelas';
            $walikelas = Walikelas::findOrFail($id);
            $walikelas->update($request->all());
            $walikelas->save();
            return redirect('walikelas');
        }
        public function deletewali($id) {
            $walikelas = Walikelas::findOrFail($id);
            $walikelas->delete();
            return redirect ('walikelas');
        }
    }

    ?>