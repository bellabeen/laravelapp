@extends('template')

@section('main')
    <div id="siswa">
        <h2>Tambah Siswa</h2>

        {!! Form::open(['url' => 'siswa', 'files' => true]) !!}
            @include('siswa.form', ['submitButtonText' => 'Tambah Data'])
        {!! Form::close() !!}
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
</div>

