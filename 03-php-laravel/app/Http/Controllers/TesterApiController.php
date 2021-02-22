<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tester;

class TesterApiController extends Controller
{
    function index()
    {
        $tester = Tester::all();
        return response()->json($tester);
    }

    function savetest(Request $req)
    {
        $Tester = new Tester;
        $Tester ->id= $req->id;
        $Tester ->name_= $req->name_;
        $Tester ->email= $req->email;
        $Tester ->pass= $req->pass;
        $Tester ->save();
        
        return response()->json([
            'status' => 'ok',
            'data' => $Tester,
            'message' => 'Data was created!'
        ], 201);
    }

    function update(Request $req, $id)
    {
        $Tester=Tester::find($id);
        $Tester->update($req->all());

        return response()->json([
            'status' => 'ok',
            'data' => $Tester,
            'message' => 'Data was updated'
        ], 200);
    }

    function delete($id)
    {
        $Tester=Tester::Find($id);
        $Tester->delete();

        return response()->json([
            'status' => 'ok',
            'data' => $Tester,
            'message' => 'Data was deleted'
        ], 200);
    }
}
