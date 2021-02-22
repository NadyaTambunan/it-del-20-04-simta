<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\absen;

class absen extends Model
{
    protected $table = 'absen';
    protected $primaryKey = 'id_group';
    public $timestamps = false;
    protected $fillable = ['absent_date', 'id_sup', 'stud_name', 'id_group', 'topic'];
    public $incrementing = false;
}