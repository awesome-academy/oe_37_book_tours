<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    public $timestamps = false;

    protected $fillable = [
    	'province_code',
    	'name',
    	'type',
    ];

    public function districts ()
    {
    	return $this->hasMany(District::class, 'province_code', 'province_code');
    }
}
