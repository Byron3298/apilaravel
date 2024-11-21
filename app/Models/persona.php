<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','nombre','apellido','direccion','telefono'];
}
