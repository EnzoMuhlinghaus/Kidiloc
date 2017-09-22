<?php

namespace Kidiloc;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    public function cars(){
      return $this->belongsToMany('Kidiloc\Rent')->withTimestamps();
    }
}
