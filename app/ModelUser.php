<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
  protected $table = 'users';
  protected $fillable = ['email', 'password', 'nama', 'foto'];
  public $incrementing = false;
  public $timestamps = false;
}
