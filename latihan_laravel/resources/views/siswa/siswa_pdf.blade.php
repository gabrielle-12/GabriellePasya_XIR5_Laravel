
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Membuat Laporan PDF dengan DOMPDF</title>
</head>
<body>
<h5 align="center">Membuat Laporan PDF dengan DOMPDF Laravel</h2>
<table class="table table-striped">>
@if (!empty($siswa_list))
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($siswa_list as $siswa)
            <tr>
                <td> {{ $siswa->nisn }}</td>
                <td> {{ $siswa->nama_siswa }}</td>
                <td> {{ $siswa->tanggal_lahir }}</td>
                <td> {{ $siswa->jenis_kelamin }}</td>
                <td>{{!empty($siswa->kelas->nama_kelas) ?
                        $siswa->kelas->nama_kelas : ' - '}}</td>
            </tr>
        @endforeach
        @else
        <p>Tidak Ada Data siswa.</p>
    @endif
</table>

</body>
</html>