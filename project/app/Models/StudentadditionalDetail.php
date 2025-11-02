<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentadditionalDetail extends Model
{
    protected $fillable = [
        'user_id',
        'parent_id',
        'date_of_birth',
        'bld_group',
        'course_name',
        'admission_fees',
        'semester_fees',
        'total_semester',
        'examination_fees',
        'total_fee',
        'emergency_contact',
        'emergency_contact_person',
    ];
}
