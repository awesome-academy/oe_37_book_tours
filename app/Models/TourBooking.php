<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourBooking extends Model
{
    //
    use SoftDeletes;

    protected $table = 'tour_bookings';

    protected $fillable = [
        'user_id',
        'tour_id',
        'payment',
        'price',
        'people_num',
        'from_date',
        'to_date',
        'contact_name',
        'email',
        'phone',
        'status',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeAccepted($query)
    {
        return $query->where('status', 2);
    }
}
