<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'fullname',
        'email_address'
    ];

    public function scopeNew($query)
    {
        return $query->where('read', 0);
    }
}
