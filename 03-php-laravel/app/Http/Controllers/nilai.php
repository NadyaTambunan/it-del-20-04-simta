<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nilai;

class nilai extends Controller
{
    function save(Request $req)
    {
        $nilai = new nilai;
        $nilai->prodi= $req->prodi;
        $nilai->sesi= $req->sesi;
        $nilai->id_kelompok= $req->id_kelompok;
        $nilai->komp_1= $req->komp1;
        $nilai->komp_2= $req->komp2;
        $nilai->komp_3= $req->komp3;
        $nilai->hasil= $req->akhir;
        $nilai->save();
        return redirect('/nilai');
    }
}
