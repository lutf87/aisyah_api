<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return response()->json($pengumuman);
    }
}
