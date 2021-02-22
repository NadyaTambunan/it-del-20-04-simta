<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;

class ScheduleApiController extends Controller
{

    public function index()
    {
        $group_schedule = schedule::all();
        return response()->json($group_schedule);
    }
    public function create()
    {
        $group_schedule = new schedule;

        $group_schedule ->id= $req ->input('id');
        $group_schedule ->pra_seminar= $req ->input('pra_seminar');
        $group_schedule ->seminar= $req ->input('seminar');
        $group_schedule ->pra_sidang= $req ->input('pra_sidang');
        $group_schedule ->sidang= $req ->input('sidang');

        $group_schedule ->save();
        return response()->json($group_schedule);
    }
        
    public function edit(Request $req, $id)
    {
        $data = schedule::find($id);
        $data->pra_seminar = $req->input('pra_seminar');
        $data->seminar = $req->input('seminar');
        $data->pra_sidang = $req->input('pra_sidang');
        $data->sidang = $req->input('sidang');

        $data->save();
        return response()->json($data);
    }

    public function delete($id)
    {
        $group_schedule = schedule::find($id);
        $group_schedule->delete();
        
        return response()->json($group_schedule);
    }

}
