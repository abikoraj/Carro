<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'activity1',
        'value1',
        'activity2',
        'value2',
        'activity3',
        'value3',
        'activity4',
        'value4'
    ];
}
