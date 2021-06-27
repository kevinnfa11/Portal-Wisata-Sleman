<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratuboko extends Model
{
    protected $table = "ratubokos";
 
    protected $fillable = ['file','keterangan'];

}
