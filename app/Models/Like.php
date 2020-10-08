<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    //
    use SoftDeletes;

    public $timestamps = false;

    protected $table = 'likes';

    protected $fillable = [
        'user_id',
        'review_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function review()
    {
    	return $this->belongsTo(Review::class, 'review_id', 'id');
    }
}
