<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    function index()
    {
        $group_ = Group::all();
        return view ('group/index', compact('group_'));
    }

    function create()
    {
       return view('group/create'); 
    }

    function save(Request $req)
    {
        $Group = new Group;
        $Group ->id_group= $req->id_group;
        $Group ->stud_name= $req->stud_name;
        $Group ->YEAR= $req->YEAR;
        $Group ->nim_1= $req->nim_1;
        $Group ->name_1= $req->name_1;
        $Group ->nim_2= $req->nim_2;
        $Group ->name_2= $req->name_2;
        $Group ->nim_3= $req->nim_3;
        $Group ->name_3= $req->name_3;
        $Group ->save();
        return redirect('/groups')->with('flash_message_success', 'Insert Berhasil');
    }

    function edit($id, request $req)
    {
        $group=Group::find($id);
        $data = $req->input();
        $group->id_group = $data['id_group'];
        $group->stud_name = $data['stud_name'];
        $group->YEAR = $data['YEAR'];
        $group->nim_1 = $data['nim_1'];
        $group->name_1 = $data['name_1'];
        $group->nim_2 = $data['nim_2'];
        $group->name_2 = $data['name_2'];
        $group->nim_3 = $data['nim_3'];
        $group->name_3 = $data['name_3'];
        $group->save();

        return redirect('/groups');
    }

    function editform($id)
    {
        $group=Group::find($id);
        return view('group/edit', compact('group'));
    }

    function delete($id)
    {
        $groups=Group::Find($id);
        $groups->delete();
        return redirect('/groups');
    }
}
