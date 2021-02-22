<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class scheduleController extends Controller
{

    public function index()
    {
        $group_schedules = schedule::all();
        return view('/schedule/index',['group_schedules'=>$group_schedules]);
    }
    public function create()
    {
        return view('/schedule/create');
    }

    public function save(Request $req)
    {
        $data = new schedule();
        $data->id = $req->id;
        $data->pra_seminar = $req->jadprasem;
        $data->seminar = $req->jadsem;
        $data->pra_sidang = $req->jadprasid;
        $data->sidang = $req->jadsid;
        $data->save();

        $group_schedules = schedule::all();
        return view('/schedule/index',['group_schedules'=>$group_schedules]);
    }
        
    public function edit(Request $req)
    {
        $data = schedule::where('id', $req->id)->first();
        $data->pra_seminar = $req->jadprasem;
        $data->seminar = $req->jadsem;
        $data->pra_sidang = $req->jadprasid;
        $data->sidang = $req->jadsid;
        $data->save();

        $group_schedules = schedule::all();
        return view('/schedule/index',['group_schedules'=>$group_schedules]);
    }

    public function editform($id)
    {
        $group_schedule=schedule::find($id);
        return view('/schedule/edit', ['group_schedule'=>$group_schedule]);
    }

    public function delete($id)
    {
        schedule::find($id)->delete();

        return redirect('/schedule/index');
    }

}
