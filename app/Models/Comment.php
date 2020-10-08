<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    //
    use SoftDeletes;

    protected $table = 'comments';

    protected $fillable = [
        'user_id',
        'tour_id',
        'content',
        'parent_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id');
    }

}
