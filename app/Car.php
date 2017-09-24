<?php

namespace Kidiloc;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

  protected $table = 'cars';

  protected $fillable = [
    'brand',
    'daily_rate',
    'model',
    'category_id',
  ];

  public function rents(){
    return $this->hasMany(Rent::class)->withTimestamps();
  }

  public function category(){
    return $this->belongsTo(Category::class);
  }
}
