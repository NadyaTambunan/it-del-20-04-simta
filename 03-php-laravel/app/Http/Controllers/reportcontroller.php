<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\report;

class reportcontroller extends Controller
{
    function index()
    {
        $report = report::all();
        return view ('report/index', compact('report'));
    }

    function save(Request $req)
    {
        $laporan = new laporan;
        $laporan->description= $req->description;
        $laporan->sesion_name= $req->sesion_name;
        $laporan->status_= $req->status_;
        $laporan->file= $req->file;
        $laporan->save();
        return redirect('/laporan');
    }
}