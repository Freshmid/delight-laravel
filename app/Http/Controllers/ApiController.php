<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function rekomendasi(Request $request)
    {
        $data = Resep::with("user")->get()->orderBy("rating", "DESC")->take(6);
        $response = [
            "data" => $data,
            "status" => true
        ];
        return response()->json($response);
    }
}
