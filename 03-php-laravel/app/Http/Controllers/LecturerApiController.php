<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;

class LecturerApiController extends Controller
{
    function index()
    {
        $lecturer = Lecturer::all();
        return response()->json($lecturer);
    }

    function post(Request $req)
    {
        $Lecturer = new Lecturer;
        $Lecturer ->id_group= $req->id_group;
        $Lecturer ->idsup_1= $req->idsup_1;
        $Lecturer ->sup_name_1= $req->sup_name_1;
        $Lecturer ->idsup_2= $req->idsup_2;
        $Lecturer ->sup_name_2= $req->sup_name_2;
        $Lecturer ->idtes_1= $req->idtes_1;
        $Lecturer ->tes_name_1= $req->tes_name_1;
        $Lecturer ->idtes_2= $req->idtes_2;
        $Lecturer ->tes_name_2= $req->tes_name_2;
        $Lecturer ->idtes_3= $req->idtes_3;
        $Lecturer ->tes_name_3= $req->tes_name_3;
        $Lecturer ->save();
        
        return response()->json([
            'status' => 'ok',
            'data' => $Lecturer,
            'message' => 'Data was created!'
        ], 201);
    }
 
    function update(Request $req, $id)
    {
        $lecturer=Lecturer::find($id);
        $lecturer->update($req->all());

        return response()->json([
            'status' => 'ok',
            'data' => $lecturer,
            'message' => 'Data was updated'
        ], 200);
    }
    function delete($id)
    {
        $lecturer=Lecturer::Find($id);
        $lecturer->delete();
        
        return response()->json([
            'status' => 'ok',
            'data' => $lecturer,
            'message' => 'Data was deleted'
        ], 200);
    }
}
