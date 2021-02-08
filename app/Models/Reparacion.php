<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    use HasFactory;

    protected $table ='reparacion';

    public $timestamps= false;

    protected $fillable = ['idconsola','descripcion', 'fecha', 'precio'];

    public function consola(){
        return $this->belongsTo('App\Models\Consola', 'idconsola');
    }
}
