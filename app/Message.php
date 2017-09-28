<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'fullname',
        'email_address',
        'message',
        'phone_number'
    ];

    public function scopeNew($query)
    {
        return $query->where('read', 0);
    }
}
