<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {

        $validatedData = $request->validate([
            'email'=>'required|email',
            'password' => 'required|min:5|max:30'
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if ($user && Hash::check($validatedData['password'],$user->password)) {

            $token = $user->createToken('api');
            return [
                'token' => $token->plainTextToken
            ];

        } else {
            return [
                'errors' => 'Invalid Credentials'
            ];
        }

    }
}
