@extends('template')

@section('main')
    <div id="siswa">
        <h2>Tambah Siswa</h2>
        
       {!! Form::open(['url' => 'siswa']) !!}
            <div class="form-group">
                {!! Form::label('nisn', 'NISN', ['class' => 'control-label']) !!}
                {!! Form::text('nisn', null, ['class' => 'form-control']) !!}
                <!-- <label for="nisn" class="control-label">NISN</label>
                <input name="nisn" id="nisn" type="text" class="form-control"> -->
            </div>

            <div class="form-group">
                <!-- <label for="nama_siswa" class="control-label">Nama</label>
                <input name="nama_siswa" id="nama_siswa" type="text" class="form-control"> -->
                {!! Form::label('nama_siswa', 'Nama', ['class' => 'control-label']) !!}
                {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <!-- <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                <input name="tanggal_lahir" id="tanggal_lahir" type="text" class="form-control"> -->
                {!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'control-label']) !!}
                {!! Form::text('tanggal_lahir', null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
                <!-- <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label> -->
                <div class="radio">
                    <label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki-Laki</label>
                </div>
                <div class="radio">
                    <label>{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Tambah Siswa', ['class' => 'btn btn-primary form-control']) !!}
                <!-- <input class="btn btn-primary form-control" type="submit" value="Tambah Siswa"> -->
            </div>
            {!! Form::close() !!}
        
    </div>
    @endsection

    @section('footer')
    <div id='footer'>
        <p>&copy; 2020 laravelapp.dev</p>
    </div>
    @endsection
</div>