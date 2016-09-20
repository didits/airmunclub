<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    //
    protected $table = 'imgs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'id_type', 'type','path'
    ];

}
