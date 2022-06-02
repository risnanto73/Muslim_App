<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function editProfile($id)
    {
        $user = auth()->user();
        return view('user.editprofile', compact('user'));
    }

}
