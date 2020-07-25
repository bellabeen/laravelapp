@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Halaman Detail Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Detail Siswa </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">   
                    <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Kode Pendaftaran</th>
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
                        <tr>
                            <td>Foto</td>
                            <td>
                                @if (isset($siswa->foto))
                                    <img src="{{ asset('fotosiswa/' . $siswa->foto) }} ">
                                @else
                                    @if ($siswa->jenis_kelamin == 'L')
                                    <img src="{{ asset('fotosiswa/dummymale.jpg') }}">
                                    @else
                                    <img src="{{ asset('fotosiswa/dummyfemale.jpg') }}">
                                    @endif
                                @endif
                            </td>
                        </tr>

                    </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


