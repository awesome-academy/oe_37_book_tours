<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    
    public $timestamps = false;

    protected $fillable = [
        'district_code',
        'province_code',
        'name',
        'type',
    ];

    public function province ()
    {
    	return $this->belongsTo(Province::class, 'province_code', 'province_code');
    }

    public function wards ()
    {
    	return $this->hasMany(Ward::class, 'district_code', 'district_code');
    }
}
