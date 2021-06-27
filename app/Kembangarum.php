<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kembangarum extends Model
{
     protected $table = "kembangarums";
 
    protected $fillable = ['file','keterangan'];
}
