<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $guarded = ['id_genero'];
    protected $primaryKey = 'id_genero';
    protected $table = 'genero';
    public $timestamps = false;

}
