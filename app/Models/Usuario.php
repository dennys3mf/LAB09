<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   protected $table = 'usuarios';
   protected $primaryKey = 'id';
   protected $fillable = ['nombre', 'apellido', 'email', 'password'];
   protected $hidden = ['password'];
   public $timestamps = false;
}
