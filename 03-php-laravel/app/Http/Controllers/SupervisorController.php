<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Supervisor;

class SupervisorController extends Controller
{
    function index()
    {
        $supervisor = Supervisor::all();
        return view ('supervisor/index', compact('supervisor'));
    }

    function create()
    {
       return view('supervisor/create'); 
    }

    function savesup(Request $req)
    {
        $Supervisor = new Supervisor;
        $Supervisor ->id= $req->id;
        $Supervisor ->name_= $req->name_;
        $Supervisor ->email= $req->email;
        $Supervisor ->pass= $req->pass;
        $Supervisor ->save();
        return redirect('/supervisor')->with('flash_message_success', 'Insert Berhasil');
    }

    function edit($id, request $req)
    {
        $supervisor=Supervisor::find($id);
        $data = $req->input();
        $supervisor->id = $data['id'];
        $supervisor->name_ = $data['name_'];
        $supervisor->email = $data['email'];
        $supervisor->save();

        return redirect('/supervisor');
    }

    function editform($id)
    {
        $supervisor=Supervisor::find($id);
        return view('supervisor/edit', compact('supervisor'));
    }

    function delete($id)
    {
        $supervisor=Supervisor::Find($id);
        $supervisor->delete();
        return redirect('/supervisor');
    }

}
