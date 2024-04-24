<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller {


    public function login(LoginRequest $request) : UserResource{
        $data = $request->validated();
        $user = User::where("email", $data['email'])->first(); 
        if(!$user || !Hash::check($data['password'], $user->password)){
            throw new HttpResponseException(response([
                "errors" => [
                    "email" => [
                        "email or password wrong"
                    ]
                ]
            ], 400));
        }
        $user->token = Str::uuid()->toString();
        $user->save();
        return new UserResource($user);
    }
}
