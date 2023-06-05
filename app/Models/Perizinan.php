<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perizinan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'mulai', 'selesai', 'judul_izin', 'pesan_izin', 'bukti', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
