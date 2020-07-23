@if (isset($siswa))
    {!! Form::hidden('id', $siswa->id) !!}
@endif

@if($errors->any())
    <div class="form-group {{ $errors->has('kode_pendaftaran') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('kode_pendaftaran', 'Kode Pendaftaran', ['class' => 'control-label']) !!}
    {!! Form::text('kode_pendaftaran', null, ['class' => 'form-control']) !!}
        @if ($errors->has('kode_pendaftaran'))
            <span class="help-block">{{ $errors->first('kode_pendaftaran') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('nama_siswa') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_siswa', 'Nama Siswa', ['class' => 'control-label']) !!}
    {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nama_siswa'))
            <span class="help-block">{{ $errors->first('nama_siswa') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
    <!-- <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label> -->
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki-Laki</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan</label>
        </div>
        @if ($errors->has('jenis_kelamin'))
            <span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('tempat_lahir', 'Tempat Lahir', ['class' => 'control-label']) !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
        @if ($errors->has('tempat_lahir'))
            <span class="help-block">{{ $errors->first('tempat_lahir') }}</span>
        @endif
</div>


@if($errors->any())
    <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'control-label']) !!}
    {!! Form::date('tanggal_lahir', !empty($siswa) ? $siswa->tanggal_lahir->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}
        @if ($errors->has('tanggal_lahir'))
            <span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>
        @endif
 </div>

 @if($errors->any())
    <div class="form-group {{ $errors->has('alamat') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
        @if ($errors->has('alamat'))
            <span class="help-block">{{ $errors->first('alamat') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('kelurahan') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('kelurahan', 'Kelurahan', ['class' => 'control-label']) !!}
    {!! Form::text('kelurahan', null, ['class' => 'form-control']) !!}
        @if ($errors->has('kelurahan'))
            <span class="help-block">{{ $errors->first('kelurahan') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('kecamatan') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('kecamatan', 'Kecamatan', ['class' => 'control-label']) !!}
    {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
        @if ($errors->has('kecamatan'))
            <span class="help-block">{{ $errors->first('kecamatan') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('kota') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('kota', 'Kota', ['class' => 'control-label']) !!}
    {!! Form::text('kota', null, ['class' => 'form-control']) !!}
        @if ($errors->has('kota'))
            <span class="help-block">{{ $errors->first('kota') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('provinsi') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('provinsi', 'Provinsi', ['class' => 'control-label']) !!}
    {!! Form::text('provinsi', null, ['class' => 'form-control']) !!}
        @if ($errors->has('provinsi'))
            <span class="help-block">{{ $errors->first('provinsi') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('nama_ortu') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
{!! Form::label('nama_ortu', 'Nama Orang Tua : ', ['class' => 'control-label']) !!}
    {!! Form::text('nama_ortu', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nama_ortu'))
            <span class="help-block">{{ $errors->first('nama_ortu') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('nomor_ortu') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
{!! Form::label('nomor_ortu', 'Nomor Orang Tua : ', ['class' => 'control-label']) !!}
    {!! Form::text('nomor_ortu', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nomor_ortu'))
            <span class="help-block">{{ $errors->first('nomor_ortu') }}</span>
        @endif
</div>

<!-- @if($errors->any())
    <div class="form-group {{ $errors->has('nomor_ortu') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
{!! Form::label('nomor_ortu', 'Nomor Orang Tua : ', ['class' => 'control-label']) !!}
    {!! Form::text('nomor_ortu', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nomor_ortu'))
            <span class="help-block">{{ $errors->first('nomor_ortu') }}</span>
        @endif
</div> -->

@if($errors->any())
    <div class="form-group {{ $errors->has('nomor_nik') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
{!! Form::label('nomor_nik', 'NIK : ', ['class' => 'control-label']) !!}
    {!! Form::text('nomor_nik', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nomor_nik'))
            <span class="help-block">{{ $errors->first('nomor_nik') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('nomor_kk') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
{!! Form::label('nomor_kk', 'Nomor Kartu Keluarga : ', ['class' => 'control-label']) !!}
    {!! Form::text('nomor_kk', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nomor_kk'))
            <span class="help-block">{{ $errors->first('nomor_kk') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('status') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('status', 'Status Pendaftaran:', ['class' => 'control-label']) !!}
    <!-- <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label> -->
        <div class="radio">
            <label>{!! Form::radio('status', '0') !!} Menunggu Terverifikasi</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('status', '1') !!} Terverifikasi</label>
        </div>
        @if ($errors->has('status'))
            <span class="help-block">{{ $errors->first('status') }}</span>
        @endif
</div>

@if($errors->any())
    <div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
    {!! Form::label('foto', 'Foto', ['class' => 'control-label']) !!}
    {!! Form::file('foto') !!}
        @if ($errors->has('foto'))
            <span class="help-block">{{ $errors->first('foto') }}</span>
        @endif
</div>

<!-- @if($errors->any())
    <div class="form-group {{ $errors->has('nomor_telepon') ? 'has-error' : 'has-success' }} ">
@else
    <div class="form-group">
@endif
{!! Form::label('nomor_telepon', 'Telepon : ', ['class' => 'control-label']) !!}
    {!! Form::text('nomor_telepon', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nomor_telepon'))
            <span class="help-block">{{ $errors->first('nomor_telepon') }}</span>
        @endif
</div> -->

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    <!-- <input class="btn btn-primary form-control" type="submit" value="Tambah Siswa"> -->
</div>