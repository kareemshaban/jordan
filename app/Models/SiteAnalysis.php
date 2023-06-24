<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteAnalysis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
          'ip',
          'country',
          'last_visit',
          'visit_count'

    ];
}
