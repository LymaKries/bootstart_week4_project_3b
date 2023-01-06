<?php

namespace App\Models\NationalWeather;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalWeatherInformations extends Model
{
    use HasFactory;

    public $fillable = [
        'date',
        'degree_of_the_morning',
        'degree_of_the_afternoon',
        'degree_of_the_night',
        'type_of_weather_id',
    ];

    public $hidden = [

    ];

    public function typeOfWeather() {
        return $this->hasOne(NationalWeatherTypeWeather::class, 'type_of_weather_id','id');

    }
}
