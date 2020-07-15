<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function index(){
        $siswa_list = DB::table('siswa')
                           ->orderBy('nama_siswa', 'asc')
                            ->paginate(5);;
        $siswa_list->tanggal_lahir = Carbon::now();
        // $siswa_list->save();


        // mengambil semua data siswa
        // $siswa_list = DB::table('siswa')
        //                 ->orderBy('nama_siswa', 'asc')
        //                 // ->format('d-m-Y')
        //                 ->paginate(5);
        // $str = $siswa_list->tanggal_lahir->formatt('d-m-Y');

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

        $input = $request->all();
        $validator = Validator::make($input,[
            'nisn' => 'required|string|size:4|unique:siswa,nisn',
            'nama_siswa' => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P'
        ]);

        if($validator->fails()) {
            return redirect('siswa/create')
            ->withInput()
            ->withErrors($validator);
        }

        Siswa::create($input);
        return redirect('siswa');
    }

    public function edit($id){
        // mengedit data berdasarkan id = $id
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update($id, Request $request){
        // mengupdate semua data di form berdasarkan id = $id
        $siswa = Siswa::findOrFail($id);
        $input = $request->all();

        $validator = Validator::make($input, [
            'nisn' => 'required|string|size:4|unique:siswa,nisn,' . $request->input('id'),
            'nama_siswa' => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P'
        ]);

        if($validator->fails()) {
            return redirect('siswa/' . $id . '/edit')->withInput()
            ->withErrors($validator);
        }

        $siswa->update($request->all());
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
