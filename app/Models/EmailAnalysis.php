<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAnalysis extends Model
{
    use HasFactory;
    protected $fillable = [
      'id',
      'email_counter',
    ];
}
