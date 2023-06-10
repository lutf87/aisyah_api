<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Ruang;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    use ApiResponser;

    public function login(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'password' => 'required',
            'fcm_token' =>'nullable',
            'device_name' => 'required',
        ]);

        if (Auth::attempt($request->only('nisn', 'password')))
        {
            if($request->filled('fcm_token'))
            {
                Auth::user()->update(['fcm_token' => $request->fcm_token]);
            }
            $token = Auth::user()->createToken('authToken')->plainTextToken;
            $user = array_merge(Auth::user()->toArray(), ['token' => $token]);
            return $this->okResponse("Login Berhasil", $user);
        }
        return $this->unauthenticatedResponse("Login gagal");

        // $user = User::where('nisn', $request->nisn)->first();
        // if (! $user || ! Hash::check($request->password, $user->password)) {
            // return response()->json(['message' => 'Maaf NISN atau password anda tidak terdaftar'], 401);
        //     return $this->unauthorized("Maaf NISN atau password anda salah");
        // } else {

        //     $token = $user->createToken($request->device_name)->plainTextToken;
        // }
        // return $this->success($token, "Berhasil Login");

    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        // return response()->json(['message' => 'Logged Out'], 200);
        return $this->success("Logged Out");
    }

    public function profile(Request $request)
    {
        $profile = Auth::user();
        // return response()->json($profile);
        return new UserResource($profile, 200);
    }
}
