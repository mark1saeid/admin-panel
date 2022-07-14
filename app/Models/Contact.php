<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'ts_link',
        'tg_link',
        'web_link',
        'ios_review',
        'tv_review',
        'public',
    ];


}
