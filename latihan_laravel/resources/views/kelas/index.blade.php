@extends('template')

@section('main')
<div id="guru">
<h2 align="center">Kelas</h2>
    @if (!empty($kelas_list))
    <a href="{{ url('tambahkls') }}" class="btn btn-primary" style="padding='40px';">Tambah Kelas</a>
        <table class="table">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $k=0;?>
        @foreach ($kelas_list as $kelas)
            <tr>
                <td> {{ $kelas->id }}</td>
                <td> {{ $kelas->nama_kelas }}</td>
                <td><a class="btn btn-success btn-sm" href="{{ url('kelas/' . $kelas->id) }}">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ url('kelas/' . $kelas->id . '/editkls') }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('kelas/' . $kelas->id . '/deletekls') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
                <?php $k++;?>
            </tr>
        @endforeach
        </tbody>
        </table>
        <center><h5>Jumlah Kelas : {{$k}} </h5></center>
    @else
        <p>Tidak Ada Data kelas.</p>
    @endif
</div>
@stop
