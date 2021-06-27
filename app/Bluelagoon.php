<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bluelagoon extends Model
{
    protected $table = "bluelagoons";
 
    protected $fillable = ['file','keterangan'];
}
