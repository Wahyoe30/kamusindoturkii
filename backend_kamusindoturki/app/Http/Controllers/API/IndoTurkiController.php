<?php

namespace App\Http\Controllers\API;

use App\Models\IndoTurki;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

header("Access-Control-Allow-Origin: header");
header("Access-Control-Allow-Origin: *");
class IndoTurkiController extends Controller
{
    public function index()
{
    $IndoTurki = IndoTurki::all();

    $results = $IndoTurki->map(function ($data) {
        return [
            'kata_indonesia' => $data->kata_indonesia,
            'kata_turki' => $data->kata_turki,
            'jenis_kata' => $data->jenis_kata,
            'contoh_penggunaan' => $data->contoh_penggunaan,
            'contoh_penggunaan_turki' => $data->contoh_penggunaan_turki,
            'keterangan' => $data->keterangan,
        ];
    });

    return response()->json(['message' => 'Data Berhasil diakses', 'results' => $results], 200);
}





}
