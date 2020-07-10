<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){

        $siswa_list = DB::table('siswa')
                        ->orderBy('nama_siswa', 'asc')
                        ->paginate(2);

        $jumlah_siswa = Siswa::count();
        return view('siswa.index', ['siswa_list' => $siswa_list], ['jumlah_siswa' => $jumlah_siswa]);
        // // mengambil semua data siswa
        // $siswa_list = Siswa::all()->sortBy('nama_siswa')->simplePaginate(10);

        // // menghitung jumlah siswa
        // $jumlah_siswa = Siswa::count();

        // //mengirimkan data siswa ke view
        // return view('siswa.index', ['siswa_list' => $siswa_list], ['jumlah_siswa' => $jumlah_siswa]);
    }

    public function show($id){
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', ['siswa' => $siswa]);

    }

    public function create(){
        return view('siswa.create');
    }

    public function store(Request $request){
        Siswa::create($request->all());
        return redirect('siswa');
    }

    public function edit($id){
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update($id, Request $request){
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect('siswa');
    }

    public function destroy($id){
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }
}
