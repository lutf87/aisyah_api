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
    public function login(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('nisn', $request->nisn)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            // return response()->json(['message' => 'Maaf NISN atau password anda tidak terdaftar'], 401);
            return $this->unauthenticatedResponse("Maaf NISN atau password anda salah");
        } else {
            $token = $user->createToken($request->device_name)->plainTextToken;
            // $users = array_merge((array) Auth::user(), ['token' => $token]);
        }

        return $this->okResponse("Login Berhasil", $token);
        // return response()->json(['access_token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        // return response()->json(['message' => 'Logged Out'], 200);
        return $this->okResponse("Logged Out");
    }

    public function profile(Request $request)
    {
        $profile = Auth::user();
        // return response()->json($profile);
        return new UserResource($profile, 200);
    }
}
