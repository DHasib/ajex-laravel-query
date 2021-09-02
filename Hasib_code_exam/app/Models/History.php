<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'gender', 'upazila_id',
    ];
    
    public function upazila()
    {
        return $this->belongsTo('App\Models\Upazila', 'upazila_id' );
    }
}
