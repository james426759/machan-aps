<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class SetupShift extends Model
{
    protected $fillable = ['name', 'type', 'work_on', 'work_off', 'rest_group', 'remark', 'afternoon_work_on', 'afternoon_work_off', 'total_rest_time'];
}
