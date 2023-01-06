<?php

namespace App\Models\NationalWeather;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalWeatherTypeWeather extends Model
{
    use HasFactory;

    public $fillable = [
        'type_of_weather',
        'hour',
    ];

    public $hidden = [

    ];
}
