<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
        $user = Auth::user();
        // dd($user);
        $users = User::all();
        // dd($user->toArray());
        return view('user_list',compact('users'));
    }

    public function store(){
        $user = new User();
        $user->name = 'User2';
        $user->email = 'User2@gmail.com ';
        $user->password = md5(89076);
        $user->gender = 'female';
        $user->phone = 23456789456;
        $user->address = 'manikpur';
        // $user->is_active = ;
        $user->save();
        dd('user create successfully.');
    }

    public function update($id){
        $user = User::where('id',$id)->first();
        // dd($user->toArray());
        $user->name = 'mukesh kumar';
        $user->email = 'mukesh@gmail.com ';
        $user->password = md5(231302);
        $user->gender = 'male';
        $user->phone = 2345678934;
        $user->address = 'daulatabad';
        $user->is_active = 1;
        $user->save();
        dd('user updeted successfully.');
    }

    public function delete($id){
        $user = User::where('id',$id)->first();
        $user->delete();
        dd('user deleted successfully.');
    }

    public function show($id){
        $user = User::where('id',$id)->first();
        dd($user->toArray());
    }
}
