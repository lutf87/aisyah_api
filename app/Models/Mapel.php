<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mapel', 'nama_mapel', 'created_at', 'updated_at'
    ];

    public function jadwalpelajaran()
    {
        return $this->hasMany(JadwalPelajaran::class);
    }

    public function jadwalsemester()
    {
        return $this->hasMany(JadwalSemester::class);
    }

    public function nilaitugas()
    {
        return $this->hasMany(NilaiTugas::class);
    }

    public function nilaipts()
    {
        return $this->hasMany(NilaiPts::class);
    }

    public function nilaipas()
    {
        return $this->hasMany(NilaiPas::class);
    }
}
