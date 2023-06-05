<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_ruang', 'nama_kelas', 'kelompok', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function izin()
    {
        return $this->hasManyThrough(Perizinan::class, User::class);
    }

    public function jadwalpelajaran()
    {
        return $this->hasOne(JadwalPelajaran::class);
    }

    public function jadwalsemester()
    {
        return $this->hasOne(JadwalSemester::class);
    }
}
