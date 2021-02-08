<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consola extends Model
{
    use HasFactory;

    protected $table ='consola';

    public $timestamps= false;

    protected $fillable = ['nombre','urlpic', 'estado', 'precio','fechaventa'];
    
    public function reparaciones(){
        return $this->hasMany('App\Models\Reparacion', 'idconsola');
    }
}
