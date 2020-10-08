<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    //
    use SoftDeletes;

    protected $table = 'reviews';

    protected $fillable = [
        'user_id',
        'tour_id',
        'content',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tour()
    {
    	return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }

    public function likes()
    {
    	return $this->hasMany(Like::class, 'review_id', 'id');
    }
}
