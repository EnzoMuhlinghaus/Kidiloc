<?php

namespace Kidiloc;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
  protected $table = 'rents';

  protected $fillable = [
    'rent_date_beginning',
    'rent_date_ending',
    'customer_email',
    'car_id',

  ];

  public function car(){
    return $this->belongsTo(Car::class);
  }
}
