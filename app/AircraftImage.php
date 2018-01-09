<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AircraftImage extends Model
{
    protected $table = 'aircraft_image';
    protected $guarded = [];

    private $imgPath = '/img/aircrafts/';

    public function getAircraftShadowAttribute($value)
    {
        return $this->imgPath.$value;
    }

}
