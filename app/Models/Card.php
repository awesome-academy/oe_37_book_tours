<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    //
    use SoftDeletes;

    public $timestamps = false;

    protected $table = 'cards';

    protected $fillable = [
        'name',
    ];

    public function banks()
    {
    	return $this->hasMany(Bank::class, 'card_id', 'id');
    }
}
