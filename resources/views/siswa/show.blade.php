@extends('template')

@section('main')
<div id="siswa">
<h2>Detail Siswa</h2>
<table class="table table-striped">
    <tr>
        <th>NISN</th>
        <td>{{ $siswa->nisn }}</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>{{ $siswa->nama_siswa }}</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>{{ $siswa->tanggal_lahir }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>{{ $siswa->jenis_kelamin }}</td>
    </tr>
</table>
</div>
@endsection


@section('footer')
    @include('footer')
@endsection
