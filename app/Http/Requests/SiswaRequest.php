<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        //Cek apakah Input atau Update
        if($this->method() == 'PATCH'){
            $kode_pendaftaran_rules = 'required|string|unique:siswa,kode_pendaftaran,' . $this->get('id');
            $nomor_nik_rules = 'required|string|unique:siswa,nomor_nik,' . $this->get('id');
            $nomor_nisn_rules = 'required|string|unique:nilai,nisn,' . $this->get('id') . ',id_siswa';
            
        } else{
            $kode_pendaftaran_rules = 'required|string|unique:siswa,kode_pendaftaran';
            $nomor_nik_rules = 'required|string|unique:siswa,nomor_nik';
            $nomor_nisn_rules = 'required|string|unique:nilai,nisn';
        }
        return [
            'kode_pendaftaran' => $kode_pendaftaran_rules,
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
            'nomor_nik' => $nomor_nik_rules,
            'nomor_kk' => 'required|max:25',
            'status' => 'string|in:0,1',
            'nisn' => $nomor_nisn_rules,
            'semester_1' => 'required|max:10',
            'semester_2' => 'required|max:10',
            'semester_3' => 'required|max:10',
            'semester_4' => 'required|max:10',
            'semester_5' => 'required|max:10',
            'foto' => 'sometimes|image|max:500|mimes:jpeg,jpg,png',
        ];
    }
}
