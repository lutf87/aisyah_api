<?php

namespace App\Http\Controllers;

use App\Http\Resources\NilaiPasResource;
use App\Http\Resources\NilaiPtsResource;
use App\Http\Resources\NilaiTugasResource;
use App\Models\NilaiPas;
use App\Models\NilaiPts;
use App\Models\NilaiTugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{

    // tugas
    public function tugassmt1()
    {
        $user = Auth::user()->id;
        $kelas = Auth::user()->kelas->nama_kelas;
        $nilaitugas = NilaiTugas::orderBy('tugas_ke', 'asc')
            ->where('user_id', $user)
            ->whereIn('kelas', [$kelas])
            ->whereIn('semester', ['Ganjil'])
            ->get();
        // return response()->json($tugas);
        return NilaiTugasResource::collection($nilaitugas);
    }

    public function tugassmt2()
    {
        $user = Auth::user()->id;
        $kelas = Auth::user()->kelas->nama_kelas;
        $nilaitugas = NilaiTugas::orderBy('tugas_ke', 'asc')
            ->where('user_id', $user)
            ->whereIn('kelas', [$kelas])
            ->whereIn('semester', ['Genap'])
            ->get();
        // return response()->json($tugas);
        return NilaiTugasResource::collection($nilaitugas);
    }

    // PTS
    public function ptssmt1()
    {
        $user = Auth::user()->id;
        $kelas = Auth::user()->kelas->nama_kelas;
        $nilaipts = NilaiPts::orderBy('mapel_id', 'asc')
            ->where('user_id', $user)
            ->whereIn('kelas', [$kelas])
            ->whereIn('semester', ['Ganjil'])
            ->get();
        // return response()->json($tugas);
        return NilaiPtsResource::collection($nilaipts);
    }

    public function ptssmt2()
    {
        $user = Auth::user()->id;
        $kelas = Auth::user()->kelas->nama_kelas;
        $nilaipts = NilaiPts::orderBy('mapel_id', 'asc')
            ->where('user_id', $user)
            ->whereIn('kelas', [$kelas])
            ->whereIn('semester', ['Genap'])
            ->get();
        // return response()->json($tugas);
        return NilaiPtsResource::collection($nilaipts);
    }

    // PAS
    public function passmt1()
    {
        $user = Auth::user()->id;
        $kelas = Auth::user()->kelas->nama_kelas;
        $nilaipts = NilaiPas::orderBy('mapel_id', 'asc')
            ->where('user_id', $user)
            ->whereIn('kelas', [$kelas])
            ->whereIn('semester', ['Ganjil'])
            ->get();
        // return response()->json($tugas);
        return NilaiPasResource::collection($nilaipts);
    }

    public function passmt2()
    {
        $user = Auth::user()->id;
        $kelas = Auth::user()->kelas->nama_kelas;
        $nilaipts = NilaiPas::orderBy('mapel_id', 'asc')
            ->where('user_id', $user)
            ->whereIn('kelas', [$kelas])
            ->whereIn('semester', ['Genap'])
            ->get();
        // return response()->json($tugas);
        return NilaiPasResource::collection($nilaipts);
    }
}
