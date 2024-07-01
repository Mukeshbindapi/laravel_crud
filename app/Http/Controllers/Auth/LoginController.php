<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $users = User::where('email',$email)->first();

        if($users){

            $hashedPassword = $users->password;
            if(Hash::check($password,$hashedPassword)){
                dd('Login Successfully.');
            }else{
                dd('Password Not Match');
            }
        }else{
            dd('user not found');
        }
    }
}
