<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absen;

class absenController extends Controller
{
    function index()
    {
        $absen = absen::all();
        return view ('absen/index-absen', compact('absen'));
        //return response()->json($absen);
    }
    function new()
    {
        return view ('absen/new-absen');
    }
    function simpan (Request $req)
    {
        $absen = new absen;
        $absen->absent_date= $req->absent_date;
        $absen->id_sup= $req->id_sup;
        $absen->stud_name= $req->stud_name;
        $absen->id_group= $req->id_group;
        $absen->topic= $req->topic;
        $absen->save();
        return redirect('/absen');
        //return response()->json($absen);
    }
}
