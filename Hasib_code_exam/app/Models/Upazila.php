<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'district_id',
    ];

    public function district()
    {
        return $this->belongsTo('App\Models\District', 'district_id' );
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
    public function history()
    {
        return $this->hasOne('App\Models\History');
    }
}
