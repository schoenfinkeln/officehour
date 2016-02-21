<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Officehour extends Model
{
    protected $fillable = [
        'begin',
        'appointment'
    ];

    protected $dates = ['begin'];

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
