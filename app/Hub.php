<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
    public function airport()
    {
        return $this->hasOne('App\Models\Airport');
    }
    public function airline()
    {
        return $this->belongsTo('App\Airline');
    }
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
