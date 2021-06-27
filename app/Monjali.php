<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monjali extends Model
{
    protected $table = "monjalis";
 
    protected $fillable = ['file','keterangan'];
}
