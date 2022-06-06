<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller
{

    public function editProfile($id)
    {
        $user = auth()->user();
        return view('user.editprofile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {

        $profile = User::findOrfail($id);
        $input = $request->all();
        $profile->update($request->all());
        if ($request->input('password')) {
            $input['password'] = password_hash($request->input('password'), PASSWORD_DEFAULT);
        } else {
            $input = Arr::except($input, ['password']);
        }

        $profile->update($input);

        return redirect('/home');
    }
}
