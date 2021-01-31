<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoint extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function car_brand()
    {
        return $this->belongsTo(CarBrand::class);
    }

    public function bodystyle()
    {
        return $this->belongsTo(Bodystyle::class);
    }
}
