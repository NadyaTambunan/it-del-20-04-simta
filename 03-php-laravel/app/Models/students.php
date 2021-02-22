<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\students;

class students extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'nim';
    protected $fillable = ['id', 'nim', 'name_', 'email', 'stud_name'];
    public $incrementing = false;
} 