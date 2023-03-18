<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $fillable=[
        'family_id',
            'foster_training',
            'foster_parent',
            'license',
           'date_completed',
            'race',
    ];
}
