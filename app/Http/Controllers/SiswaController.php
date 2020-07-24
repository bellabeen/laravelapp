<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Nilai;
use App\Telepon;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use store;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function index(){    
        //show data
        $siswa_list = Siswa::orderBy('nama_siswa', 'asc')->paginate(2);
        $siswa_list->tanggal_lahir = Carbon::now();

        // menghitung jumlah siswa
        $jumlah_siswa = Siswa::count();
        return view('siswa.index', ['siswa_list' => $siswa_list], ['jumlah_siswa' => $jumlah_siswa]);
    }

    public function show($id){
        // mengambil data berdasarkan id = $id
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', ['siswa' => $siswa]);

    }

    public function create(){
        // menampilkan form tambah
        return view('siswa.create');
    }

    public function store(Request $request){
        // menyimpan semua data berdasaran variable yang terdapat di form input ke database
        // Siswa::create($request->all());
        // return redirect('siswa');

        // if($request->hasFile('foto')) {
        //     $foto = $request->file('foto');
        //     $ext = $foto->getClientOriginalExtension();

        //     if($request->file('foto')->isValid()){
        //         $foto_name = date('Ymd'). ".$ext";
        //         $upload_path = 'fotoupload';
        //         $request->file('foto')->move($upload_path, $foto_name);
        //         $input['foto'] = $foto_name;
        //     }
        // }

        $input = $request->all();
        $this->validate($request,[
            'kode_pendaftaran' => 'unique:siswa,kode_pendaftaran',
            'nama_siswa' => 'string|required|max:100',
            'jenis_kelamin' => 'string|required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'string|max:100',
            'kelurahan' => 'string|max:50',
            'kecamatan' => 'string|max:50',
            'kota' => 'required|string|max:50',
            'provinsi' => 'required|string|max:50',
            'nama_ortu' => 'required|string|max:50',
            'nomor_ortu' => 'max:15',
            'nomor_nik' => 'required|unique:siswa,nomor_nik|max:25',
            'nomor_kk' => 'required|max:25',
            'status' => 'string|in:0,1',
            'nisn' => 'unique:nilai,nisn',
            'semester_1' => 'required|max:10',
            'semester_2' => 'required|max:10',
            'semester_3' => 'required|max:10',
            'semester_4' => 'required|max:10',
            'semester_5' => 'required|max:10',

            // 'foto' => 'string|max:255',
            
            // 'nomor_telepon' => 'sometimes|numeric|digits_between:10,15|unique:telepon,nomor_telepon',
        ]);

        // if($validator->fails()) {
        //     return redirect('siswa/create')
        //     ->withInput()
        //     ->withErrors($validator);
        // }

        $siswa = Siswa::create($input);

        $nilai = new Nilai;
        $nilai->nisn = $request->input('nisn');
        $nilai->semester_1 = $request->input('semester_1');
        $nilai->semester_2 = $request->input('semester_2');
        $nilai->semester_3 = $request->input('semester_3');
        $nilai->semester_4 = $request->input('semester_4');
        $nilai->semester_5 = $request->input('semester_5');

        $siswa->nilai()->save($nilai);

        return redirect('siswa');
    }

    public function edit($id){
        // mengedit data berdasarkan id = $id
        $siswa = Siswa::findOrFail($id);
        $siswa->nisn = $siswa->nilai->nisn;
        $siswa->semester_1 = $siswa->nilai->semester_1;
        $siswa->semester_2 = $siswa->nilai->semester_2;
        $siswa->semester_3 = $siswa->nilai->semester_3;
        $siswa->semester_4 = $siswa->nilai->semester_4;
        $siswa->semester_5 = $siswa->nilai->semester_5;

        return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update($id, Request $request){
        // mengupdate semua data di form berdasarkan id = $id
        $siswa = Siswa::findOrFail($id);
        $input = $request->all();

        $this->validate($request, [
            'kode_pendaftaran' => 'sometimes|numeric|digits_between:5,15',
            'nama_siswa' => 'string|required|max:100',
            'jenis_kelamin' => 'string|required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'string|max:100',
            'kelurahan' => 'string|max:50',
            'kecamatan' => 'string|max:50',
            'kota' => 'required|string|max:50',
            'provinsi' => 'required|string|max:50',
            'nama_ortu' => 'required|string|max:50',
            'nomor_ortu' => 'max:15',
            'nomor_nik' => 'string',
            'nomor_kk' => 'required|max:25',
            'status' => 'string|in:0,1',
            'nisn' => 'sometimes|numeric|digits_between:5,15|unique:nilai,nisn,' . $request->input('id') . ',id_siswa',
            'semester_1' => 'required|max:10,' . $request->input('id') . ',id_siswa',
            'semester_2' => 'required|max:10,' . $request->input('id') . ',id_siswa',
            'semester_3' => 'required|max:10,' . $request->input('id') . ',id_siswa',
            'semester_4' => 'required|max:10,' . $request->input('id') . ',id_siswa',
            'semester_5' => 'required|max:10,' . $request->input('id') . ',id_siswa',
        ]);

        // if($validator->fails()) {
        //     return redirect('siswa/' . $id . '/edit')->withInput()
        //     ->withErrors($validator);
        // }

        $siswa->update($request->all());

        $nilai = $siswa->nilai;
        $nilai->nisn = $request->input('nisn');
        $nilai->semester_1 = $request->input('semester_1');
        $nilai->semester_2 = $request->input('semester_2');
        $nilai->semester_3 = $request->input('semester_3');
        $nilai->Semester_4 = $request->input('semester_4');
        $nilai->semester_5 = $request->input('semester_5');
        $siswa->nilai()->save($nilai);

        // $telepon = $siswa->telepon;
        // $telepon->nomor_telepon = $request->input('nomor_telepon');
        // $siswa->telepon()->save($telepon);
        return redirect('siswa');

    }

    public function destroy($id){
        // menghapus data berdasrkan id = $id
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }

    public function tesCollection(){
        $collection = Siswa::select('nisn', 'nama_siswa')->take(2)->get();
        $koleksi = $collection->toArray();
        foreach ($koleksi as $siswa){
            echo $siswa['nisn'] . ' - ' . $siswa['nama_siswa'] . '<br>';
        }
    }

    // public function dateMutator(){
    //     $siswa = Siswa::findOrFail(1);
    //     $str = 'Tanggal Lahir: ' . $siswa->tanggal_lahir->format('d-m-Y') . '<br>' . 'Ulang Tahun ke 30 akan jatuh pada tanggal: ' .
    //         '<strong>' . $siswa->tanggal_lahir->addYear(30)->format('d-m-Y'); '</strong>';
    //     return $str;
    // }

    public function dateMutator(){
        $siswa = Siswa::findOrFail(4);
        $str = 'Tanggal Lahir: ' . $siswa->tanggal_lahir->format('d-m-Y') . '<br>' . 'Ulang Tahun ke 30 akan jatuh pada tanggal: ' .
            '<strong>' . $siswa->tanggal_lahir->addYear(30)->format('d-m-Y'); '</strong>';
        return $str;
    }
}
