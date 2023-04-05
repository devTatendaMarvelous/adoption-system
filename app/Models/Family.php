<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable=[
        'rep_name',
            'dob',
            'id_num',
            'gender',
            'language',
            'email',
            'occupation',
            'relationship_status',
            'ref_letter',
    ];
    public function surveys(){
        return $this->hasOne(Survey::class);
    }
}
