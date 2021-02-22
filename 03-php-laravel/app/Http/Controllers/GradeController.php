<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\grade;

class GradeController extends Controller
{
    function index()
    {
        $grade = grade::all();
        return response()->json($grade);
        //return view ('grade/index-grade', compact('grade'));
    }
    function new()
    {
        return view ('grade/new-grade');
    }
    function save(Request $req)
    {
        $grade = new grade;
        $grade->stud_name= $req->stud_name;
        $grade->sesion_name= $req->sesion_name;
        $grade->id_group= $req->id_group;
        $grade->komp_1= $req->komp_1;
        $grade->komp_2= $req->komp_2;
        $grade->komp_3= $req->komp_3;
        $grade->result= $req->result;
        $grade->save();
        //return redirect('/grade')->with('flash_message_success', 'Insert Berhasil');
        return response()->json($grade);
    }

}
