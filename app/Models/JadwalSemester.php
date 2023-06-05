<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSemester extends Model
{
    use HasFactory;

    protected $fillable = [
        'mapel_id', 'guru_id', 'kelas_id', 'hari', 'kategori', 'tanggal', 'semester', 'mulai', 'selesai'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function hari()
    {
        return $this->belongsTo(Hari::class);
    }
}
