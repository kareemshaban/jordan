<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSection extends Model
{
    use HasFactory;
    protected $fillable = [
      'id',
      'img',
        'name',
        'role',
        'description'
    ];
}
