<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SerialController extends Controller
{
    public function serial()
    {
        $tmdb_id = 74602;

        $data = Http::asJson()
            ->get(config('services.tmdb.endpoint') . 'movie/' . $tmdb_id . '?api_key=' . config('services.tmdb.api'));

        return view('serial', compact('data'));
    }
}
