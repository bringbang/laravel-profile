<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $profile = Users::first();
        return view('profile')
        ->with([
            "full_name" => $profile->full_name,
            "email"     => $profile->email,
            "phone"     => $profile->phone,
            "mobile"    => $profile->mobile,
        ]);
    }
    public function createUserProfile(){
        Users::create([
        "full_name" => "Nitit",
        "email"     => "j@j.com",
        "phone"     => "028888888",
        "mobile"    => "001111",]);
}
}
