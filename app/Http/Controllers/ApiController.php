<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function rekomendasi(Request $request)
    {
        $data = Resep::with("user", "kategori")->orderBy("rating", "DESC")->get()->take(6);
        $response = [
            "data" => $data,
            "status" => true
        ];
        return response()->json($response);
    }

    public function inspirasi(Request $request)
    {
        $data = Resep::orderBy("id", "DESC")->get(["id", "gambar"])->take(5);
        $response = [
            "data" => $data,
            "status" => true
        ];
        return response()->json($response);
    }

    public function homeApi(Request $request)
    {
        $response = [
            "data" => [
                "rekomendasi" => $this->rekomendasi($request)->original["data"],
                "inspirasi" => $this->inspirasi($request)->original["data"]
            ],
            "status" => true
        ];
        return response()->json($response);
    }

    public function detailResep(Request $request)
    {
        $data = Resep::with("user", "kategori")->find($request->id);
        $response = [
            "data" => $data,
            "jumlah" => count($data),
            "status" => true
        ];
        return response()->json($response);
    }

    public function resep(Request $request)
    {
        $data = Resep::with("user", "kategori")
            ->where(function ($q) use ($request) {
                $q->where('nama', 'LIKE', "%$request->cari%")
                    ->orWhere('deskripsi', 'LIKE', "%$request->cari%");
            })
            ->whereRelation("kategori", "nama", "LIKE", "%$request->kategori%")
            ->orderBy('id', $request->order ? $request->order : "ASC")
            ->get();
        $response = [
            "data" => $data,
            "jumlah" => count($data),
            "status" => true
        ];
        return response()->json($response);
    }
}
