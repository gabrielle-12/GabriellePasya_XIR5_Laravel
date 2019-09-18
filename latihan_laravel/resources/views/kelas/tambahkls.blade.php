@extends('template')

@section('main')
    <div id="kelas">
        <h2 align="center">Tambah Kelas</h2>

        <form action="{{ url('simpankls') }}" method="post">
        {{ csrf_field () }}
        <div class="form-group"> 
 <label for="id" class="control-label">ID Kelas</label>
            <input name="id" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama_kelas" class="control-label">Nama Kelas</label>
            <input name="nama_kelas" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/kelas'">Kembali</button>
        </form>
        </div>
    @stop