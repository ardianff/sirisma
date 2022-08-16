<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applicant extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_applicant';
    protected $fillable = ['id_user', 'nik', 'nim', 'no_hp', 'alamat_ktp', 'alamat_domisili', 'provinsi_ktp', 'kotakab_ktp', 'kecamatan_ktp', 'kelurahan_ktp', 'provinsi_domisili', 'kotakab_domisili', 'kecamatan_domisili', 'kelurahan_domisili', 'status', 'jenjang', 'asal', 'program_studi', 'semester'];
    protected $table = 'applicants';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function province_ktp()
    {
        return $this->belongsTo(Province::class, 'provinsi_ktp', 'id_provinsi');
    }
    public function district_ktp()
    {
        return $this->belongsTo(District::class, 'kotakab_ktp', 'id_kota');
    }
    public function sub_district_ktp()
    {
        return $this->belongsTo(SubDistrict::class, 'kecamatan_ktp', 'id_kec');
    }
    public function village_ktp()
    {
        return $this->belongsTo(Village::class, 'kelurahan_ktp', 'id_kel');
    }
    public function province_domisili()
    {
        return $this->belongsTo(Province::class, 'provinsi_domisili', 'id_provinsi');
    }
    public function district_domisili()
    {
        return $this->belongsTo(District::class, 'kotakab_domisili', 'id_kota');
    }
    public function sub_district_domisili()
    {
        return $this->belongsTo(SubDistrict::class, 'kecamatan_domisili', 'id_kec');
    }
    public function village_domisili()
    {
        return $this->belongsTo(Village::class, 'kelurahan_domisili', 'id_kel');
    }
}