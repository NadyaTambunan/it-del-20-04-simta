<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\grade;

class grade extends Model
{
    protected $table = 'grade';
    protected $primaryKey = 'id_group';
    public $timestamps = false;
    protected $fillable = ['id_group', 'stud_name', 'komp_1', 'komp_2', 'komp_3', 'result'];
    public $incrementing = false;
}