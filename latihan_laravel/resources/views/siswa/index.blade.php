@extends('template')

@section('main')
<div id="siswa">
<h2 align="center">Siswa</h2>
    @if (!empty($siswa_list))
    <a href="{{ url('create') }}" class="btn btn-primary" style="padding='40px';">Tambah Siswa</a>    <a href="{{ url('cetak') }}" class="btn btn-primary"target="_blank" style="padding='40px';">Cetak PDF</a>

        <table class="table">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $s=0;?>
        @foreach ($siswa_list as $siswa)
            <tr>
                <td> {{ $siswa->nisn }}</td>
                <td><a href="/siswa/{{$siswa->id}}/profile">{{ $siswa->nama_siswa }}</a></td>
                <td> {{ $siswa->tanggal_lahir }}</td>
                <td> {{ $siswa->jenis_kelamin }}</td>
                <td>{{!empty($siswa->kelas->nama_kelas) ?
                        $siswa->kelas->nama_kelas : ' - '}}</td>
                <td><a class="btn btn-success btn-sm" href="{{ url('siswa/' . $siswa->id) }}">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ url('siswa/' . $siswa->id . '/edit') }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('siswa/' . $siswa->id . '/delete') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
            <?php $s++;?>
            </tr>
        @endforeach
        </tbody>
        </table>
        <center><h5>Jumlah Siswa : {{$s}} </h5></center>
    @else
        <p>Tidak Ada Data siswa.</p>
    @endif
</div>
@stop
