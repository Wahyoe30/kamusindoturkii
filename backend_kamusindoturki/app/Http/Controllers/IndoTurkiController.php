<?php

namespace App\Http\Controllers;

use App\Models\IndoTurki;
use Illuminate\Http\Request;

class IndoTurkiController extends Controller
{
    public function index(){

        $indoturki = IndoTurki::all();
        return view('indoturki.index',['indoturki'=>$indoturki]);
    }

    public function create(){
        
        return view('indoturki.create');
    }

    public function store(Request $request){
        $request->validate([
            'kata_indonesia'=>'required',
            'kata_turki'=>'required',
            'jenis_kata'=>'required',
            'contoh_penggunaan'=>'nullable',
            'contoh_penggunaan_turki'=>'nullable',
            'keterangan'=>'nullable',
        ]);

        IndoTurki::create([
        'kata_indonesia'=>$request->kata_indonesia,
        'kata_turki'=>$request->kata_turki,
        'jenis_kata'=>$request->jenis_kata,
        'contoh_penggunaan'=>$request->contoh_penggunaan,
        'contoh_penggunaan_turki'=>$request->contoh_penggunaan_turki,
        'keterangan'=>$request->keterangan,
        ]);

        return redirect()->route('indoturki.index')->with('success', 'Data kamus berhasil ditambahkan.');
    }

    public function edit(IndoTurki $indoturki){
        return view ('indoturki.edit',['indoturki'=>$indoturki]);
    }

    public function update(Request $request, IndoTurki $indoturki){
        $request->validate([
            'kata_indonesia'=>'required',
            'kata_turki'=>'required',
            'jenis_kata'=>'required',
            'contoh_penggunaan'=>'nullable',
            'contoh_penggunaan_turki'=>'nullable',
            'keterangan'=>'nullable',
        ]);

        $indoturki->update([
            'kata_indonesia'=>$request->kata_indonesia,
            'kata_turki'=>$request->kata_jerman,
            'jenis_kata'=>$request->jenis_kata,
            'contoh_penggunaan'=>$request->contoh_penggunaan,
            'contoh_penggunaan_turki'=>$request->contoh_penggunaan_jerman,
            'keterangan'=>$request->keterangan,
            ]);


            return redirect()->route('indoturki.index')->with('success', 'Data kamus berhasil diperbarui.');
    }

    public function destroy(IndoTurki $indoturki)
    {
        $indoturki->delete();

        return redirect('indoturki/index');
    }

}
