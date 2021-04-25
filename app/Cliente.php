<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = ['id_cliente'];
    protected $primaryKey = 'id_cliente';
    protected $table = 'cliente';

    public $timestamps = false;
}
