<?php

namespace App\Http\Controllers;

use App\Http\Resources\PerizinanDetailResource;
use App\Http\Resources\PerizinanResource;
use App\Models\Kelas;
use App\Models\Perizinan;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PerizinanController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $izins = Perizinan::where('user_id', $user)->get();

        // return response()->json($izins);
        return PerizinanResource::collection($izins);
    }

    public function detail($id)
    {
        $izin = Perizinan::findOrFail($id);
        if ($izin->user_id !== Auth::user()->id) {
            return response()->json(['message' => 'maaf anda tidak memiliki akses']);
        } else {
            $izinDetail = Perizinan::with('user.kelas')->find($id);
            $izinDetail->user->kelas->id;
        }
        return response()->json(['data' => $izinDetail]);
        // return new PerizinanDetailResource($izin);
    }

    public function store(Request $request)
    {
        $request->validate([
            'mulai' => 'required',
            'selesai' => 'required',
            'judul_izin' => 'required',
            'pesan_izin' => 'required',
            'bukti' => 'required',
        ]);

        // $nisn = Auth::user()->nisn;
        // $imgName = $nisn . '_izin_' . time() . '_' . $request->file('bukti')->getClientOriginalName();
        // $request->bukti->storeAs('public/izin/images', $imgName);

        $user = Auth::user()->id;

        Perizinan::create([
            'user_id' => $user,
            'bukti' => $request->bukti,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'judul_izin' => $request->judul_izin,
            'pesan_izin' => $request->pesan_izin,
        ]);

        $user = Auth::user()->id;
        $izins = Perizinan::where('user_id', $user)->get();
        return PerizinanResource::collection($izins);
    }

    public function destroy($id)
    {
        $izin = Perizinan::findOrFail($id);
        Storage::disk('local')->delete('public/izin/images/' . $izin->bukti);
        $izin->delete();

        $user = Auth::user()->id;
        $izins = Perizinan::where('user_id', $user)->get();
        return PerizinanResource::collection($izins);
    }

    public function update(Request $request, $id)
    {
        $izin = Perizinan::find($id);
        $this->validate($request, [
            'mulai' => 'required',
            'selesai' => 'required',
            'judul_izin' => 'required',
            'pesan_izin' => 'required',
            'bukti' => 'required | images | max:5120'
        ]);
        $izin->update($request->all());

        if ($request->hasFile('bukti')) {

            // get ID
            $izinID = Perizinan::findOrFail($id);
            $exists = Storage::disk('local')->exists('public/izin/images/' . $izinID->bukti);

            // delete old image
            if ($exists) {
                Storage::disk('local')->delete('public/izin/images/' . $izinID->bukti);
            }

            $nisn = Auth::user()->nisn;
            $imgName = $nisn . '_izin_' . time() . '_' . $request->file('bukti')->getClientOriginalName();
            $request->bukti->storeAs('public/izin/images', $imgName);

            $user = Auth::user()->id;
            // $izin = Perizinan::findOrFial($id);

            $izindata = [
                'user_id' => $user,
                'bukti' => $imgName,
                'mulai' => $request->mulai,
                'selesai' => $request->selesai,
                'judul_izin' => $request->judul_izin,
                'pesan_izin' => $request->pesan_izin,
            ];
            $izinID->update($izindata);

            // $arrayUp = array(
            //     'user_id' => $izinID,
            //     'bukti' => $izinID->bukti,
            //     'mulai' => $izinID->mulai,
            //     'selesai' => $izinID->selesai,
            //     'judul_izin' => $izinID->judul_izin,
            //     'pesan_izin' => $izinID->pesan_izin,
            //     'updated_at' => now(),
            // );

            // DB::table('perizinans')->where('id', $user)->update($arrayUp);

            $izinDetail = Perizinan::with('user.kelas')->find($id);
            $izinDetail->user->kelas->id;
            return response()->json(['data' => $izinDetail]);
        } else {
            $error = "No Image Was Selected";
            return response()->json($error);
        }
    }
}
