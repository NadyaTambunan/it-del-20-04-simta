<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\schedule;

class schedule extends Model
{
    protected $table = 'group_schedule';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'pra_seminar', 'seminar', 'pra_sidang', 'sidang'];
    public $incrementing = false;
}
