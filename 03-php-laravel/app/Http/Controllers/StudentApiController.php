<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentApiController extends Controller
{
    function index()
    {
        $students = students::all();
        return response()->json($students);
    }

    public function create(Request $req)
    {
        $students = new students;

        $students ->id= $req ->input('id');
        $students ->nim= $req ->input('nim');
        $students ->name_= $req ->input('name_');
        $students ->email= $req ->input('email');
        $students ->stud_name= $req ->input('stud_name');

        $students ->save();
        return response()->json([
            'status' => 'ok',
            'data' => $students,
            'message' => 'Data was created!'
        ], 201);
    }
        
    public function edit(Request $req, $nim)
    {
        $data = students::find($nim);
        $data->id = $req->input('id');
        $data->name_ = $req->input('name_');
        $data->email = $req->input('email');
        $data->stud_name = $req->input('stud_name');

        $data->save();
        return response()->json($data);
    }

    public function delete(Request $req, $nim)
    {
        $students = students::find($nim);
        $students->delete();
        
        return response()->json($students);
    }
}
