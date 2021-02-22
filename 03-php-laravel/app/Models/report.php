<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\report;

class report extends Model
{
    protected $table = 'report';
    protected $primaryKey = 'sesion_name';
    public $timestamps = false;
    protected $fillable = ['description', 'sesion_name', 'status_', 'file_'];
    public $incrementing = false;
}