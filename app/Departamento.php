<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $guarded = ['id_departamento'];
    protected $primaryKey = 'id_departamento';
    protected $table = 'departamento';

    public $timestamps = false;
}
