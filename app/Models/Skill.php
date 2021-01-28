<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'video',
        'skill1',
        'progress1',
        'skill2',
        'progress1',
        'skill3',
        'progress1',
    ];
}
