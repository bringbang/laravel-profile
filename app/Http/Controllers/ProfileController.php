<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
        ->with([
            "full_name" => "Nitit Duangsanglek",
            "email"     => "jane_spr@hotmail.com",
            "phone"     => "-",
            "mobile"    => "086-XXXXXXX"
        ]);
    }
}
