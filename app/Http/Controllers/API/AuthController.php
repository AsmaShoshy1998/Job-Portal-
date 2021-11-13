<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try{
      
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6',
        ]);
       
    $users=User::create([
     'name'=>$request->name, 
    'email'=>$request->email,
        'password'=>Hash::make($request['password']),
        'role'=>$request->role,
        
    ]);
    $token = $users->createToken('APIProjectToken')->plainTextToken;
    $response= [
        'user'=>$users,
        'token'=>$token

    ];
    return response()->json([
        'success'=>'true',
        'message'=>'User Registration Successfully',
        'data'=> $response,
           ],201); 
    }
catch (\Throwable $s)
{
    return response()->json([
        'success'=>'false',
        'message'=>$s->getMessage(),
        'data'=>'',
    ]); 
}
}
public function login(Request $request)
{
    try{
      
       $data= $request->validate([
           
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);
       
    $users=User::where('email',$data['email'])->first();
       if(!$users|| !Hash::check($data['password'], $users->password))
       {
        return response()->json([
            'message'=>'Invalid credentials',
            ],401); 
       }
       else{
        $token = $users->createToken('APIProjectTokenLogin')->plainTextToken;
        $response= [
            'user'=>$users,
            'token'=>$token
        ];
        return response()->json([
            'success'=>'true',
            'message'=>'User Login Successfully',
            'data'=> $response,
               ],201);
       }
    }
catch (\Throwable $s)
{
    return response()->json([
        'success'=>'false',
        'message'=>$s->getMessage(),
        'data'=>'',
    ]); 
}
}


public function logout(Request $request)
{
    $request->user()->currentAccessToken()->delete();
    // dd(tokens()->get());
    return response()->json([
        'success'=>'true',
        'message'=>'Logged out Successfully',
           ],201); 
}
}
