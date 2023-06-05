<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_hari'
    ];

    public function jadwalpelajaran()
    {
        return $this->hasMany(JadwalPelajaran::class);
    }

    public function jadwalsemester()
    {
        return $this->hasMany(JadwalSemester::class);
    }
}
