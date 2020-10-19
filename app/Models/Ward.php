<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';

    public $timestamps = false;

    protected $fillable = [
    	'ward_code',
    	'district_code',
    	'name',
    	'type',
    ];

    public function district ()
    {
        $this->belongsTo(District::class, 'district_code', 'district_code');
    }
}
