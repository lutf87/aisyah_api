<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip', 'nama_guru', 'jenkel', 'alamat', 'created_at', 'updated_at'
    ];

    public function jadwalpelajaran()
    {
        return $this->hasOne(JadwalPelajaran::class);
    }

    public function jadwalsemester()
    {
        return $this->hasOne(JadwalSemester::class);
    }
}
