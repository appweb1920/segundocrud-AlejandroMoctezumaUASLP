<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pieza extends Model
{
    use SoftDeletes;
    protected $table="piezas";
    protected $fillable=['nombre','descripcion','no_piezas','costo_pieza'];
}