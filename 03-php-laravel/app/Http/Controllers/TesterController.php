<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Tester;

class TesterController extends Controller
{
    function index()
    {
        $tester = Tester::all();
        return view ('tester/index', compact('tester'));
    }

    function create()
    {
       return view('tester/create'); 
    }

    function savetest(Request $req)
    {
        $Tester = new Tester;
        $Tester ->id= $req->id;
        $Tester ->name_= $req->name_;
        $Tester ->email= $req->email;
        $Tester ->pass= $req->pass;
        $Tester ->save();
        return redirect('/tester')->with('flash_message_success', 'Insert Berhasil');
    }

    function edit($id, request $req)
    {
        $tester=Tester::find($id);
        $data = $req->input();
        $tester->id = $data['id'];
        $tester->name_ = $data['name_'];
        $tester->email = $data['email'];
        $tester->save();

        return redirect('/tester');
    }

    function editform($id)
    {
        $tester=Tester::find($id);
        return view('tester/edit', compact('tester'));
    }

    function delete($id)
    {
        $tester=Tester::Find($id);
        $tester->delete();
        return redirect('/tester');
    }
}
