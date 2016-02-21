<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function officehour()
    {
        return $this->belongsTo('App\Officehour');
    }

    public function getEnd()
    {
        $endTime = new Carbon($this['begin']);
        $endTime->addMinutes($this['duration']);
        return $endTime;
    }
}
