<?php

namespace App;

use App\Classes\VAOSHelpers;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    public $table = 'schedule_complete';

    protected $guarded = [
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function airline()
    {
        return $this->belongsTo('App\Airline');
    }
    public function depapt()
    {
        return $this->belongsTo('App\Models\Airport');
    }
    public function arrapt()
    {
        return $this->belongsTo('App\Models\Airport');
    }
    public function aircraft()
    {
        return $this->belongsTo('App\Models\Aircraft');
    }

    public function getDistance()
    {
        return round(VAOSHelpers::getDistance($this->depapt->lat, $this->depapt->lon, $this->arrapt->lat, $this->arrapt->lon, "N"));
    }
}
