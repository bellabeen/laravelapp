@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Halaman Daftar Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Siswa </li>
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
                        <div class="card-header">
                        <a href="siswa/create" class="btn btn-primary">
                Tambah Siswa</a>
                        </div>    
                    <div class="card-body">
                    @if (!empty($siswa_list))
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode Pendaftaran</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <tbody>
                                    <?php foreach($siswa_list as $siswa): ?>
                                    <tr>

                                        <td>{{ $siswa->kode_pendaftaran }}</td>
                                        <td>{{ !empty($siswa->nilai->nisn) ? $siswa->nilai->nisn : '-' }}</td>
                                        <td>{{ ucwords($siswa->nama_siswa) }}</td>
                                        <td>{{ $siswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki - Laki'  }}</td>
                                        <!-- <td>{{ date("d-m-Y", strtotime($siswa->tanggal_lahir)) }}</td> -->
                                        <td>{{ $siswa->status == '0' ? 'Menunggu Verifikasi' : 'Terverifikasi'  }}</td>
                                        
                                        
                                        <!-- <td>{{ !empty($siswa->telepon->nomor_telepon) ? 
                                            $siswa->telepon->nomor_telepon : '-' }}
                                        </td> -->
                                        <td>

                                 
                                            <div class="button">
                                                {{ link_to('siswa/' .$siswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                                                {{ link_to('siswa/' .$siswa->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                                                
                                            </div>
                                                <div class="button">
                                                {!! Form::open(['method' => 'DELETE', 'action' => ['SiswaController@destroy', $siswa->id]]) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm', 'method']) !!}
                                                {!! Form::close() !!}
                                            </div>
 

<!-- <a href="{{ link_to('siswa/' .$siswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}">Show</a>


<button type="submit" class="btn btn-danger">Delete</button> -->
                     </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        @else
                    <p>Tidak ada data siswa</p>
                    @endif

                    <div class="table-bottom">
            <div class="pull-left">
                <strong>Jumlah Siswa : {{ $jumlah_siswa }}</strong>
            </div>
            <div class="paging">
               {{ $siswa_list->links() }}
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection