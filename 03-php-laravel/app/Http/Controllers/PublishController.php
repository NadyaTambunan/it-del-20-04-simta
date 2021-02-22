<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artifact;

class PublishController extends Controller
{
    public function index()
    {
        $artifact = artifact::all();
        return view('/publish/index',['artifact'=>$artifact]);
    }
        
    public function edit(Request $req)
    {
        $data = artifact::where('id', $req->id)->first();
        $data->description = $req->description;
        $data->sesion_name = $req->sesion_name;
        $data->save();

        $artifact = artifact::all();
        return view('/publish/index',['artifact'=>$artifact]);
    }

    public function editform($id)
    {
        $artifact=artifact::find($id);
        return view('/publish/edit', ['artifact'=>$artifact]);
    }

    public function delete($id)
    {
        artifact::find($id)->delete();

        return redirect('/publish/index');
    }
}
