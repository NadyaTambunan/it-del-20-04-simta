<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artifact;

class PublishApiController extends Controller
{
    function index()
    {
        $artifact = artifact::all();
        return response()->json($artifact);
    }
  
    public function edit(Request $req, $id)
    {
        $data = artifact::find($id);
        $data->description = $req->input('description');
        $data->sesion_name = $req->input('sesion_name');

        $data->save();
        return response()->json($data);
    }

    public function delete(Request $req, $id)
    {
        $artifact = artifact::find($id);
        $artifact->delete();
        
        return response()->json($artifact);
    }
}

