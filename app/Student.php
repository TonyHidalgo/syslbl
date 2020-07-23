<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['_token'];

    public function represent()
    {
        return $this->belongsTo('App\Represent');
    }
}
