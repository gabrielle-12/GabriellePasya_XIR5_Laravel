@extends('template')

@section('main')
    <div id="walikelas">
        <h2 align="center">Tambah Walikelas</h2>

        <form action="{{ url('simpanwali') }}" method="post">
        {{ csrf_field () }}
        <div class="form-group">
            <label for="id_guru" class="control-label">Nama Guru</label>
            <select name="id_guru" class="custom-select" class="form-control">
            <option selected>Guru...</option>
            @foreach($guru as $g)
            <option value="{{$g->id_guru}}">{{$g->nama_guru}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_kelas" class="control-label">Nama Kelas</label>
            <select name="id_kelas" class="custom-select" class="form-control">
            <option selected>Kelas..</option>
            @foreach($kelas as $k)
            <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
            @endforeach
            </select>   
        </div>     
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/walikelas'">Kembali</button>
        </form>
        </div>
    @stop