<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tester;

class Tester extends Model
{
    protected $table = 'tester';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'name_', 'email'];
    public $incrementing = false;
}
