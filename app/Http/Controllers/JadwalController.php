<?php

namespace App\Http\Controllers;

use App\Http\Resources\JadwalPelajaranResource;
use App\Http\Resources\JadwalSemesterResource;
use App\Models\Ekskul;
use App\Models\JadwalPelajaran;
use App\Models\JadwalSemester;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    // jadwal pelajaran
    public function pelsmt1()
    {
        $user = Auth::user()->kelas_id;
        $kategori = JadwalPelajaran::orderBy('hari_id', 'asc')
            ->where('kelas_id', $user)
            ->whereIn('semester', ['Ganjil'])
            ->get();
        // $user = Auth::user()->id;
        // $kategori = JadwalPelajaran::where();
        // return response()->json($kategori);
        return JadwalPelajaranResource::collection($kategori);
    }
    public function pelsmt2()
    {
        $user = Auth::user()->kelas_id;
        $kategori = JadwalPelajaran::orderBy('hari_id', 'asc')
            ->where('kelas_id', $user)
            ->whereIn('semester', ['Genap'])
            ->get();
        // return response()->json($kategori);
        return JadwalSemesterResource::collection($kategori);
    }

    //jadwal Pts
    public function ptssmt1()
    {
        $user = Auth::user()->kelas_id;
        $kategori = JadwalSemester::orderBy('hari_id', 'asc')
            ->where('kelas_id', $user)
            // ->whereIn('kode_ruang', ['A-1.1'])
            ->whereIn('kategori', ['PTS'])
            ->whereIn('semester', ['Ganjil'])
            ->get();
            return JadwalSemesterResource::collection($kategori);
    }

    public function ptssmt2()
    {
        $user = Auth::user()->kelas_id;
        $kategori = JadwalSemester::orderBy('hari_id', 'asc')
            ->where('kelas_id', $user)
            // ->whereIn('kode_ruang', ['A-1.1'])
            ->whereIn('kategori', ['PTS'])
            ->whereIn('semester', ['Genap'])
            ->get();
            return JadwalSemesterResource::collection($kategori);
    }

    //jadwal Pts
    public function passmt1()
    {
        $user = Auth::user()->kelas_id;
        $kategori = JadwalSemester::orderBy('hari_id', 'asc')
            ->where('kelas_id', $user)
            // ->whereIn('kode_ruang', ['A-1.1'])
            ->whereIn('kategori', ['PAS'])
            ->whereIn('semester', ['Ganjil'])
            ->get();
            return JadwalSemesterResource::collection($kategori);
    }

    public function passmt2()
    {
        $user = Auth::user()->kelas_id;
        $kategori = JadwalSemester::orderBy('hari_id', 'asc')
            ->where('kelas_id', $user)
            // ->whereIn('kode_ruang', ['A-1.1'])
            ->whereIn('kategori', ['PAS'])
            ->whereIn('semester', ['Genap'])
            ->get();
            return JadwalSemesterResource::collection($kategori);
    }

    public function ekskul()
    {
        $ekskul = Ekskul::all();
        return response()->json(['data' => $ekskul]);
    }
}
