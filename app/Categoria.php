<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $guarded = ['id_categoria'];
    protected $primaryKey = 'id_categoria';
    protected $table = 'categoria';
    public $timestamps = false;
}
