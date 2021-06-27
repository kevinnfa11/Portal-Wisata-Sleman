<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prambanan extends Model
{
    protected $table = "prambanans";
 
    protected $fillable = ['file','keterangan'];
}
