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
                <li class="breadcrumb-item active">Daftar Siswa </li>
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
                    {!! Form::model($siswa, ['method' => 'PATCH', 'action' => ['SiswaController@update', $siswa->id]]) !!}
                            @include('siswa.form', ['submitButtonText' => 'Update Siswa'])
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


