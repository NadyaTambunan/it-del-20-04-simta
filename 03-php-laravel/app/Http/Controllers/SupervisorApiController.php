<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;

{
    function index()
    {
        $supervisor = Supervisor::all();
        return response()->json($supervisor);
    }

    function savesup(Request $req)
    {
        $Supervisor = new Supervisor;
        $Supervisor ->id= $req->id;
        $Supervisor ->name_= $req->name_;
        $Supervisor ->email= $req->email;
        $Supervisor ->pass= $req->pass;
        $Supervisor ->save();
        
        return response()->json([
            'status' => 'ok',
            'data' => $Supervisor,
            'message' => 'Data was created!'
        ], 201);
    }

    function update(Request $req, $id)
    {
        $Supervisor=Supervisor::find($id);
        $Supervisor->update($req->all());

        return response()->json([
            'status' => 'ok',
            'data' => $Supervisor,
            'message' => 'Data was updated'
        ], 200);
    }

    function delete($id)
    {
        $Supervisor=Supervisor::Find($id);
        $Supervisor->delete();

        return response()->json([
            'status' => 'ok',
            'data' => $Supervisor,
            'message' => 'Data was deleted'
        ], 200);
    }
}
