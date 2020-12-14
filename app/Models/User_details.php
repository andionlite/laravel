<?php

  namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $citizenship_country_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 */
class User_details extends Model
{
    /**
     * @var array
     */
 // protected $fillable = ['user_id', 'citizenship_country_id', 'first_name', 'last_name', 'phone_number'];
 protected $primaryKey = 'id';

 public $timestamps = false;
}
