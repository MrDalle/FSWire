<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VamEvent extends Model
{
    protected $guarded = [];
    public $table = 'vam_events';
    public $timestamps = false;
}
