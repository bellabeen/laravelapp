@extends('template')

@section('main')
    <div id="siswa">
        <h2>Edit Siswa</h2>

       <!-- {!! Form::open(['url' => 'siswa' . $siswa->id . '/update', 'method' => 'PATCH']) !!} -->
       {!! Form::model($siswa, ['method' => 'PATCH', 'action' => ['SiswaController@update', $siswa->id]]) !!}
            @include('siswa.form', ['submitButtonText' => 'Update Siswa'])
       {!! Form::close() !!}

    </div>
    @endsection

    @section('footer')
        @include('footer')
    @endsection
</div>
