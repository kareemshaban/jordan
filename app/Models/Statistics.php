<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;
    protected $fillable = [
      'id',
      'text',
      'count1_txt',
       'count1_value',
        'count2_txt',
        'count2_value',
        'count3_txt',
        'count3_value',
        'count4_txt',
        'count4_value',
    ];
}
