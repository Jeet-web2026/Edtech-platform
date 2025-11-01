<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admindetail extends Model
{
    protected $fillable = [
        'user_id',
        'parent_id',
        'mob',
        'aadhaar',
        'profile',
        'valid_from',
        'valid_to',
        'address'
    ];

    protected function casts(): array
    {
        return [
            'valid_from' => 'date',
            'valid_to' => 'date',
        ];
    }
}
