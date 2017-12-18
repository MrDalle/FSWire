<?php

namespace App;

use App\Classes\VAOSHelpers;
use Illuminate\Database\Eloquent\Model;

class PIREP extends Model
{
    protected $guarded = [];
    public $table = 'pireps';
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

    /*public function getDistanceAttribute($value)
    {
        if ($value) {
            return $value;
        }
        return round(VAOSHelpers::getDistance($this->depapt->lat, $this->depapt->lon, $this->arrapt->lat, $this->arrapt->lon, "M"));

    }

    public static function getTotalDistance($userID)
    {
        $pireps = PIREP::where('user_id', $userID)->get();
        $total = 0;
        foreach ($pireps as $pirep)
        {
            $total += $pirep->distance;
        }
        return $total;
    }*/

}
