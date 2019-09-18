@extends('template')

@section('main')
<div id="guru">
<h2 align="center">Guru</h2>
    @if (!empty($guru_list))
    <a href="{{ url('createguru') }}" class="btn btn-primary" style="padding='40px';">Tambah Guru</a>
        <table class="table">
        <thead>
            <tr>
                <th>ID </th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $g=0;?>
        @foreach ($guru_list as $guru)
            <tr>
                <td> {{ $guru->id_guru }}</td>
                <td> {{$guru->nip}} </td>
                <td> {{ $guru->nama_guru }}</td>
                <td> {{ $guru->tanggal_lahir }}</td>
                <td> {{ $guru->jenis_kelamin }}</td>
                <td><a class="btn btn-success btn-sm" href="{{ url('guru/' . $guru->id_guru) }}">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ url('guru/' . $guru->id_guru. '/edit') }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('guru/' . $guru->id_guru . '/delete') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
                <?php $g++;?>
            </tr>
        @endforeach
        </tbody>
        </table>
        <center><h5>Jumlah Guru : {{$g}} </h5></center>
    @else
        <p>Tidak Ada Data guru.</p>
    @endif
</div>
@stop
