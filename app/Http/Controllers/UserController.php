<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Ruang;
use App\Models\User;
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
            return response()->json(['message' => 'Maaf NISN atau password anda tidak terdaftar'], 401);
        } else {
            $token = $user->createToken($request->device_name)->plainTextToken;
        }

        return response()->json(['access_token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged Out'], 200);
    }

    public function profile(Request $request)
    {
        $profile = Auth::user();
        // return response()->json($profile);
        return new UserResource($profile, 200);
    }
}
