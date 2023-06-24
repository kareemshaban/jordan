<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'start_day',
        'end_day',
        'start_time',
        'end_time',
        'contact_phone',
        'facebook',
        'twitter',
        'linkedin',
        'whatsapp',
        'instegram',
        'g_mail',
        'callback_text',
        'white_logo',
        'colored_logo',
    ];
}
