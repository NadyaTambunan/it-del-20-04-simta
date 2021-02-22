<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lecturer;


class Lecturer extends Model
{
    protected $table = 'group_lecture';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id','id_group', 'idsup_1', 'sup_name_1', 'idsup_2', 'sup_name_2', 'idtes_1', 'tes_name_1', 'idtes_2', 'tes_name_2', 'idtes_3', 'tes_name_3'];
}
