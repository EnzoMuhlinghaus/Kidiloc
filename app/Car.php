<?php

namespace Kidiloc;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function rents(){
      return $this->belongsToMany('Kidiloc\Rent')->withTimestamps();
    }
}
