<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable=[
             'type',
            'donor_id',
            'amount',
            'reference',
            'currency',
            'status',
    ];
    public function donors()
    {
        return $this->belongsTO(User::class,'donor_id');
    }
}
