<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function entry()
    {
        return $this->belongsTo('App\Entry');
    }
}