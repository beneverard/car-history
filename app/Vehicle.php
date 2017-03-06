<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'vehicle';

  /**
   * Get the user that owns the vehicle.
   */
  public function vehicles()
  {
    return $this->belongsTo('App\User');
  }
}
