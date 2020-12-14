<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 * @property boolean $active
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Model
{
    /**
     * @var array
     */
    //   protected $fillable = ['email', 'active', 'created_at', 'updated_at'];
   // protected $table = 'users';

   protected $primaryKey = 'id';
}
