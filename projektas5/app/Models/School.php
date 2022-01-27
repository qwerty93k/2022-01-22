<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    //grazina masyva hasmany
    public function schoolAttendancegroups()
    {
        return $this->hasMany(AttendanceGroup::class, 'school_id', 'id');
    }
}
