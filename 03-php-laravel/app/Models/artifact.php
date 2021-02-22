<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artifact extends Model
{
    use HasFactory;
    protected $table = 'artifact';
    public $incrementing = false;
    protected $fillable = ['id','description', 'sesion_name'];
}
