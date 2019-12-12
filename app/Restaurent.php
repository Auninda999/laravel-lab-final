<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurent extends Model
{
    protected $table = 'restaurents';
    // Primary Key
    public $primarykey = 'id';
    // Timestams
    public $timestamps = true;

    protected $fillable = [
        'name', 'contactno', 'email',' shortdescription', 'menulist',
    ];
}
