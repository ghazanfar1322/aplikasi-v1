<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fitrah;

class fitrahController extends Controller
{
    public function tambahfitrah(Request $request)
    {
        $fitrah = new fitrah();
        $fitrah->name=$request->nama;
        $fitrah->estetika=$request->estetika;
        $fitrah->perkembangan=$request->perkembangan;
        $fitrah->iman=$request->iman;
        $fitrah->bakat=$request->bakat;
        $fitrah->belajar=$request->belajar;
        $fitrah->sosial=$request->sosial;
        $fitrah->jasmani=$request->jasmani;
        $fitrah->seksualitas=$request->seksualitas;
        $fitrah->save();
        return redirect('/baru');
    }
    public function fitrahview()
    {
        $fitrah = fitrah::get();
        // dd($fitrah);
        $data = ['fitrah'=> $fitrah];
        return view('baru', $data);
    }
}
