<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $code
 * @property string $amount
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 */
class Transactions extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
   // protected $keyType = 'integer';
   protected $primaryKey = 'id';
    /**
     * @var array
     */
  //  protected $fillable = ['code', 'amount', 'user_id', 'created_at', 'updated_at'];

}
