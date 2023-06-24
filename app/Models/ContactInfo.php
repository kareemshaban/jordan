<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
    protected $fillable = [
      'id',
      'phone_txt',
        'phone',
        'email_txt',
        'email',
        'location1_txt',
        'location1_lang',
        'location1_lat',
        'location2_txt',
        'location2_lang',
        'location2_lat',
    ];
}
