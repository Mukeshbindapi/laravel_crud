<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $password = Hash::make($request->password);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->address = $request->address;
        // $user->is_active = ;
        $user->save();
        dd('user created successfully.');
    }
}
