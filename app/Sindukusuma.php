<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sindukusuma extends Model
{
    protected $table = "sindukusumas";
 
    protected $fillable = ['file','keterangan'];
}
