<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::find(1);
        $user_name = $profile->user->name;

        dd($user_name);
    }
}
