<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Users;
use Illuminate\Hashing\BcryptHasher;

class AuthController extends Controller
{
    //
    public function register(Request $req){
        $req->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required'
        ]);
        $user = new Users();
        $user->name =$req->name;
        $user->email =$req->email;
        $user->password =bcrypt($req->password);
        $user->save();
        return response()->json(['message' => 'Successfully created user!!'], 201);
    }
    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $req->only(['email', 'password']);
        if(!Auth::attempt($credentials)){
            return response()->json([
                'message' => 'Email Or Password Was Not In Correct!!!'
            ], 401);
        }
        $user = $req->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($req->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
    public function user(Request $request)
    {   
        $user = $request->user();
        $roles = $user->is_admin ? ['admin'] : ['guest'];
        $user->roles = $roles;
        return response()->json($request->user());
    }
}