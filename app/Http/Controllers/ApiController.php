<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class ApiController extends Controller
{
    public function rekomendasi(Request $request)
    {
        $data = Resep::with("user", "kategori")->orderBy("rating", "DESC")->get()->take(6);
        return ApiFormat::json($data, true);
    }

    public function inspirasi(Request $request)
    {
        $data = Resep::orderBy("id", "DESC")->get(["id", "gambar"])->take(5);
        return ApiFormat::json($data, true);
    }

    public function homeApi(Request $request)
    {
        $data = [
            "rekomendasi" => $this->rekomendasi($request)->original,
            "inspirasi" => $this->inspirasi($request)->original
        ];
        return ApiFormat::json($data, true);
    }

    public function detailResep(Request $request)
    {
        $data = Resep::with("user", "kategori")->find($request->id);
        return ApiFormat::json($data);
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

    public function upresep(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'Required',
            'nama' => 'required',
            'deskripsi' => 'required',
            // 'gambar' => 'required',
        ], [
            "user_id" => "Belum Login",
            "nama.required" => "Tidak boleh kosong",
            "deskripsi.required" => "Tidak boleh kosong",
            // "gambar.required" => "Tidak boleh kosong",
        ]);

        if ($validator->fails()) {
            $response = [
                "data" => $validator->messages(),
                "status" => false
            ];
            return response()->json($response);
        }

        $user = Resep::create([
            "user_id" => $request->user_id,
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
        ]);

        $response = [
            "data" => $user,
            "status" => true
        ];
        return response()->json($response);
    }
}
