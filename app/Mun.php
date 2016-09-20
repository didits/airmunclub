<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mun extends Model
{
    //
    protected $table = 'mun';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'description', 'type','id_author'
    ];

}
