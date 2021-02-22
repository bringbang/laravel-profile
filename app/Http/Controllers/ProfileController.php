<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
class ProfileController extends Controller
{
    public function index()
    {
        $user = Users::first();
        return view('profile')
        ->with([
            "full_name" => $user->full_name,
            "email"     => $user->email,
            "phone"     => $user->phone,
            "mobile"    => $user->mobile,
            "address"  => "45/45 m.6 kukot lumluka pathumthani 12130",
            "website" => "https://bringbang.medium.com/",
            "github" => "bringbang",
            "twitter" => "bringbang",
            "Instagram" => "bringbang_",
            "facebook" => "Nitit Duangsanglek",
            "education" => "Silpakorn University",
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
