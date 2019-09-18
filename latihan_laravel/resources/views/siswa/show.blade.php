@extends('template')

@section('main')
<div id="siswa">
    <h2 align="center">Detail Siswa</h2>
<table class="table table-striped">
<tr>
  <img src="{{asset('img/'.$siswa->avatar) }}">
  </tr>
  <tr>
      <th>Nama</th>
      <td>{{ $siswa->nama_siswa }}</td>
    </tr>
    <tr>
      <th>NISN</th>
      <td>{{ $siswa->nisn }}</td>
    </tr>
    <tr>
      <th>Nama</th>
      <td>{{ $siswa->nama_siswa }}</td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <td>{{ $siswa->tanggal_lahir }}</td>
    </tr>
    <tr>
      <th>Jenis Kelamin</th>
      <td>{{ $siswa->jenis_kelamin }}</td>
    </tr>
</table>
<button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/siswa'">Kembali</button>
</div>
@stop