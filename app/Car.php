<?php

namespace Kidiloc;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

  protected $table = 'cars';

  protected $fillable = [
    'brand',
    'daily_rate',
    'model'
  ];

  public function rents(){
    return $this->hasMany(Rent::class)->withTimestamps();
  }

  public function categories(){
    return $this->belongsTo(Category::class);
  }
}
