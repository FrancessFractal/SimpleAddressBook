<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = ['line1', 'line2', 'town', 'county', 'postal', 'country', 'entry_id'];

    public function entry()
    {
        return $this->belongsTo('App\Entry');
    }
}
