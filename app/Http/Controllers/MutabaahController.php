<?php

namespace App\Http\Controllers;

use App\Models\Mutabaah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MutabaahController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $mutabaah = Mutabaah::where('user_id', '=', $user->id)->get();
        return view('content.mutabaah.mutabaah', compact('mutabaah', 'user'));
    }

    public function store(Request $request)
    {
        Mutabaah::create(
            [
                'catatan' => $request->cat,
                'deskripsi' => $request->desk,
                'user_id' => Auth::user()->id,
            ]
        );

        return redirect('/home');
    }

    public function toForm()
    {
        $user = auth()->user();
        return view('content.mutabaah.add', compact('user'));
    }
}
