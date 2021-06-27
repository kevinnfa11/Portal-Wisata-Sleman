<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogjabay extends Model
{
     protected $table = "jogjabays";
 
    protected $fillable = ['file','keterangan'];
}
