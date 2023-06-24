<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactHeader extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'img',
        'title',
        'subtitle'
    ];
}
