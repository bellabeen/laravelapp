<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nisn',
        'nama_siswa',
        'tanggal_lahir',
        'jenis_kelamin'
    ];

    // Date MUtator function
    protected $dates = ['tanggal_lahir'];
    protected $guarded = ['status'];

    // get Accesor
    public function getNamaSiswaAttribute($nama_siswa)
    {
        return ucwords($nama_siswa);
    }

    // set mutator
    public function setNamaSiswaAttribute($nama_siswa)
    {
        $this->attributes['nama_siswa'] = strtolower($nama_siswa);
    }

    public function setTanggalLahirAttribute($tanggal_lahir){
        $this->attributes['tanggal_lahir'] = (new Carbon($tanggal_lahir))->format('Y-m-d');
    }

    // public function getTanggalLahirAttributes($tanggal_lahir){
    //     $this->attributes['tanggal_lahir'] = (new Carbon($tanggal_lahir))->format('d-m-Y');
    // }

    public function getFromDateAttribute($tanggal_lahir) {
        return Carbon::parse($tanggal_lahir)->format('d-m-Y');
    }

}
