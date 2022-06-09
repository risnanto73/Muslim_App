<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mutabaah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseIsRedirected;

class MutabaahController extends Controller
{
    public function getMutabaah($id)
    {

<<<<<<< HEAD
        $user = User::where('id', $id)->first();
        // $user = Auth::user();
        if (!$user) {
            return $this->responError(1, "Harap Login dulu");
        }
        $mutabaah = Mutabaah::where('user_id','=', $user->id)->get();

        // $mutabaah = Mutabaah::all();
=======
        $user = Auth::user();
        // if (!$user) {
        //     return $this->responError(1, "Harap Login dulu");
        // }

        $mutabaah = Mutabaah::where('user_id', '=', $user->id)->get();
>>>>>>> d8f9d17c2d81f14cba7eb013a1147d6e270d72e6
        if (!$mutabaah) {
            return $this->responError(0, "data tidak tersedia");
        }
        return response()->json([
            'status' => 1,
            'pesan' => "Data Mutabaah berhasil di get!!",
            'mutabaah' => $mutabaah,

        ], Response::HTTP_OK);
    }
    public function responError($status, $pesan)
    {

        return response()->json([
            'status' => $status,
            'pesan' => $pesan,
        ], Response::HTTP_NOT_FOUND);
    }
}
