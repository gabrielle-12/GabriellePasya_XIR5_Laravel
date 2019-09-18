@extends('template')

@section('main')
<div id="walikelas">
<h2 align="center">Wali Kelas</h2>
    @if (!empty($walikelas_list))
    <a href="{{ url('createwali') }}" class="btn btn-primary" style="padding='40px';">Tambah WaliKelas</a>
        <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $w=0;?>
        @foreach ($walikelas_list as $walikelas)
            <tr>
                <td> {{ $walikelas->id }}</td>
                <td>{{!empty($walikelas->guru->nama_guru) ?
                        $walikelas->guru->nama_guru : ' - '}}</td>
                <td>{{!empty($walikelas->kelas->nama_kelas) ?
                        $walikelas->kelas->nama_kelas : ' - '}}</td>
                <td><a class="btn btn-success btn-sm" href="{{ url('walikelas/' . $walikelas->id) }}">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/editwali') }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/deletewali') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
                <?php $w++;?>
            </tr>
        @endforeach
        </tbody>
        </table>
        <center><h5>Jumlah Walikelas : {{$w}} </h5></center>
    @else
        <p>Tidak Ada Wali Kelas.</p>
    @endif
</div>
@stop
