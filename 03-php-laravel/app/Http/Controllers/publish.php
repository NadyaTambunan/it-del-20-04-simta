<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artefak;

class publish extends Controller
{
    public function all()
    {
        $artifact = artifact::all();
        return view('publish', compact('publish'));
    }
}