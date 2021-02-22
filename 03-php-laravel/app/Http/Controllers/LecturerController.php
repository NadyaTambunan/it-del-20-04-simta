<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;

class LecturerController extends Controller
{
    function index()
    {
        $lecturer = Lecturer::all();
        return view ('lecturer/index', compact('lecturer'));
    }

    function create()
    {
       return view('lecturer/create'); 
    }

    function add(Request $req)
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
        return redirect('groups/lecturer');
    }
    function edit($id, request $req)
    {
        $lecturer=Lecturer::find($id);
        $data = $req->input();
        $lecturer->id_group = $data['id_group'];
        $lecturer->idsup_1 = $data['idsup_1'];
        $lecturer->sup_name_1 = $data['sup_name_1'];
        $lecturer->idsup_2 = $data['idsup_2'];
        $lecturer->sup_name_2 = $data['sup_name_2'];
        $lecturer->idtes_1 = $data['idtes_1'];
        $lecturer->tes_name_1 = $data['tes_name_1'];
        $lecturer->idtes_2 = $data['idtes_2'];
        $lecturer->tes_name_2 = $data['tes_name_2'];
        $lecturer->idtes_3 = $data['idtes_3'];
        $lecturer->tes_name_3 = $data['tes_name_3'];
        $lecturer->save();

        return redirect('groups/lecturer');
    }
    function editform($id)
    {
        $lecturer=Lecturer::find($id);
        return view('lecturer/edit', compact('lecturer'));
    }
    function delete($id)
    {
        $lecturer=Lecturer::Find($id);
        $lecturer->delete();
        return redirect('groups/lecturer');
    }
}