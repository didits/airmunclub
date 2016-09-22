<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $table = 'material';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'title','description', 'link','id_author'
    ];

}
