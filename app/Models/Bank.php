<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    //
    use SoftDeletes;

    public $timestamps = false;

    protected $table = 'bank_accounts';

    protected $fillable = [
        'user_id',
        'user_card',
        'name',
        'account_holder',
        'card_number',
        'expired_date',
    ];

    public function card()
    {
        return $this->belongsTo(Card::class, 'user_card', 'id');
    }
}
