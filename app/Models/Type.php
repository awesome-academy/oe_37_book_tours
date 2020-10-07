<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    //
    use SoftDeletes;

    public $timestamps = false;

    protected $table = 'types';

    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function tours()
    {
        return $this->hasMany(Tour::class, 'type_id', 'id');
    }

    public function types()
    {
        return $this->hasMany(Type::class, 'parent_id', 'id');
    }
}
