<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $berita = Berita::all();
        return view('content.berita.berita', compact('berita', 'user'));
    }

    public function toFormBerita()
    {
        $user = Auth::user();
        return view('content.berita.add', compact('user'));
    }

    public function store(Request $request)
    {
        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        $berita = Berita::all();
        $user = Auth::user();

        return view('content.berita.berita', compact('berita', 'user'));
    }
}
