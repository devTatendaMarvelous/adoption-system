<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Orphan extends Model
{
    use HasFactory;
    protected $fillable=[
        'orphan_name',	'dob' ,	'gender' ,	'description' ,'status'	,'photo',
             'birth_id','orphanage_id',
    ];

        public function created_at_mdY()

    {

       return Carbon::parse($this->created_at)->format('d M Y');

    }
    public function orphanage(){
            return $this->belongsTo(User::class, 'orphanage_id');
    }
}
