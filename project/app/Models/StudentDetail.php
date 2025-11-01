<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    protected $fillable = [
        'user_id',
        'parent_id',
        'course_id',
        'contact_number',
        'last_qualification',
        'last_qualification_organisation_name',
        'class_xth_percentage',
        'class_xth_organisation_name',
        'class_xiith_percentage',
        'class_xiith_organisation_name',
        'payment_status',
        'course_name',
        'organisation_name'
    ];
}
