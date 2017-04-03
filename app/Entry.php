<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{

    protected $fillable = ['name', 'email', 'phone'];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }


}
