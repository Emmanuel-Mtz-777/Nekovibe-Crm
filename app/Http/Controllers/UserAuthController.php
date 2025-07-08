<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{


    public function login(LoginRequest $request)
    {
        

        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status'  => false,
                'message' => 'Invalid credentials',
            ], 401);
        }

        $user = Auth::user();

        return response()->json([
            'status'  => true,
            'message' => 'Login successful',
            'token'   => $user->createToken('API Token')->plainTextToken,
        ], 200);
    }


public function createUser(CreateUserRequest $request)
{
    try {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'User created successfully',
            'token'   => $user->createToken('API Token')->plainTextToken
        ], 201);
    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'Error creating user',
            'error' => $e->getMessage()
        ], 500);
    }
}
}
