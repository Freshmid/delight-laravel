<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required',
            'confirmPassword' => 'required|same:password',
        ], [
            "fullname.required" => "Tidak boleh kosong",
            "email.required" => "Tidak boleh kosong",
            "password.required" => "Tidak boleh kosong",
            "confirmPassword.required" => "Tidak boleh kosong",
            "email.unique" => "Email telah digunakan",
            "email.email" => "Masukkan format email dengan benar",
            "password.min" => "Minimal 8 digit",
            "confirmPassword.min" => "Minimal 8 digit",
            "confirmPassword.same" => "Konfirmasi password harus sama dengan password",
        ]);

        if ($validator->fails()) {
            $response = [
                "data" => $validator->messages(),
                "status" => false
            ];
            return response()->json($response);
        }

        $user = User::create([
            "nama" => $request->fullname,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        $response = [
            "data" => $user,
            "status" => true
        ];
        return response()->json($response);
    }
}
