<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    //
    use SoftDeletes;

    public $timestamps = false;

    protected $table = 'ratings';

    protected $fillable = [
        'user_id',
        'tour_id',
        'rating',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function tour()
    {
    	return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }
}
