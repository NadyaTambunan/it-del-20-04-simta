<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    function show()
    {
        $user = User::all();
        return view ('/index', compact('user'));
    }

    

=======
use Illuminate\Http\Request;
use App\Models\students;

class StudentController extends Controller
{
    public function index()
    {
        $students = students::all();
        return view('/students/index',['students'=>$students]);
    }
    public function create()
    {
        return view('/students/create');
    }

    public function save(Request $req)
    {
        $data = new students();
        $data->id = $req->id;
        $data->nim = $req->nim;
        $data->name_ = $req->name_;
        $data->email = $req->email;
        $data->stud_name = $req->stud_name;
        $data->save();

        $students = students::all();
        return view('/students/index',['students'=>$students]);
    }
        
    public function edit(Request $req)
    {
        $data = students::where('nim', $req->nim)->first();
        $data->id = $req->id;
        $data->name_ = $req->name_;
        $data->email = $req->email;
        $data->stud_name = $req->stud_name;
        $data->save();

        $students = students::all();
        return view('/students/index',['students'=>$students]);
    }

    public function editform($nim)
    {
        $students=students::find($nim);
        return view('/students/edit', ['students'=>$students]);
    }

    public function delete($nim)
    {
        students::find($nim)->delete();

        return redirect('/students/index');
    }
>>>>>>> Stashed changes
}
