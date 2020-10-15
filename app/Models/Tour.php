<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    //
    use SoftDeletes;

    protected $table = 'tours';

    protected $fillable = [
        'type_id',
        'name',
        'address',
        'price',
        'discount',
        'description',
        'content',
        'image',
    ];

    public function scopeOrderDesc($query)
    {
       return $query->orderBy('created_at', 'desc');
    }

    public function type()
    {
    	return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class, 'tour_id', 'id');
    }

    public function tour_bookings()
    {
    	return $this->hasMany(TourBooking::class, 'tour_id', 'id');
    }

    public function ratings()
    {
    	return $this->hasMany(Rating::class, 'tour_id', 'id');
    }

    public function reviews()
    {
    	return $this->hasMany(Review::class, 'tour_id', 'id');
    }
}
