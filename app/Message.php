<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'fullname',
        'email_address',
        'message',
    ];
}
