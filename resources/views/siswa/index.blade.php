@extends('template')

@section('main')
<div id="siswa">
<h2>Siswa</h2>
    @if (!empty($siswa_list))
        <table class="table">
            <thead>
                <tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($siswa_list as $siswa): ?>
                    <tr>
                        <td>{{ $siswa->nisn }}</td>
                        <td>{{ $siswa->nama_siswa }}</td>
                        <td>{{ $siswa->tanggal_lahir }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>
                            <div class="box-button">
                                {{ link_to('siswa/' .$siswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('siswa/' .$siswa->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                            </div>
                            <div class="box-button">
                            {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'], ['method' => 'DELETE', 'action' => ['SiswaController@destroy', $siswa->id]]) !!} --}}
                                {!! Form::open(['method' => 'DELETE', 'action' => ['SiswaController@destroy', $siswa->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>

                        </td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
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

        <div class="bottom-nav">
            <div>
                <a href="siswa/create" class="btn btn-primary">
                Tambah Siswa</a>
            </div>
        </div>
</div>
@endsection


@section('footer')
    @include('footer')
@endsection
