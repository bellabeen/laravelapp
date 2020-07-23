<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';

    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'id_siswa',
        'nisn',
        'semester_1',
        'semester_2',
        'semester_3',
        'semester_4',
        'semester_5',
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa');
    }
}
