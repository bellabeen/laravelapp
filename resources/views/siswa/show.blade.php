@extends('template')

@section('main')
<div id="siswa">
<h2>Detail Siswa</h2>
<table class="table table-striped">

    <tr>
        <td>Kode Pendaftaran</td>
        <td>{{ $siswa->kode_pendaftaran }}</td>
    </tr>

    <tr>
        <td>NISN</td>
        <td>{{ !empty($siswa->nilai->nisn) ? $siswa->nilai->nisn : '-' }}</td>
    </tr>
    
    <tr>
        <td>Nama</td>
        <td>{{ $siswa->nama_siswa }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>{{ $siswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki - Laki'  }}</td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>{{ $siswa->tempat_lahir }}</td>
    </tr>
    </tr>
        <td>Tanggal Lahir</td>
        <td>{{ $siswa->tanggal_lahir->format('d-m-Y') }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>{{ $siswa->alamat }}</td>
    </tr>
    <tr>
    <tr>
        <td>Kelurahan</td>
        <td>{{ !empty($siswa->kelurahan) ? $siswa->kelurahan : '-' }}</td>
    </tr>

    <tr>
        <td>Kecamatan</td>
        <td>{{ $siswa->kecamatan }}</td>
    </tr>

    <tr>
        <td>Kota</td>
        <td>{{ $siswa->kota }}</td>
    </tr>
    <tr>
        <td>Provinsi</td>
        <td>{{ $siswa->provinsi }}</td>
    </tr>
    <tr>
        <td>Nama Orang Tua</td>
        <td>{{ $siswa->nama_ortu }}</td>
    </tr>

    <tr>
        <td>Nomor Telpon Orang</td>
        <td>{{ $siswa->nomor_ortu }}</td>
    </tr>
    <tr>
        <td>Nomor Induk Kependudukan</td>
        <td>{{ !empty($siswa->nomor_nik) ? $siswa->nomor_nik : '-' }}</td>
    </tr>
    <tr>
        <td>Nomor Kartu Keluarga</td>
        <td>{{ !empty($siswa->nomor_kk) ? $siswa->nomor_kk : '-' }}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>{{ $siswa->status == '0' ? 'Menunggu Verifikasi' : 'Terverifikasi'  }}</td>
    </tr>
    
</table>
</div>
@endsection


@section('footer')
    @include('footer')
@endsection
