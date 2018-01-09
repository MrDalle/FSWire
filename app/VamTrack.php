<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VamTrack extends Model
{
    protected $guarded = [];
    public $table = 'vam_track';
    public $timestamps = false;
}
