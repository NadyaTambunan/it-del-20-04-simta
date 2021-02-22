<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Supervisor;

class Supervisor extends Model
{
    protected $table = 'supervisor';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'name_', 'email'];
    public $incrementing = false;
}
