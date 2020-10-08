<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Revenue extends Model
{
    //
    use SoftDeletes;

    protected $table = 'revenues';

    protected $fillable = [
        'total_tour',
        'from_date',
        'to_date',
        'total_income',
    ];

}
