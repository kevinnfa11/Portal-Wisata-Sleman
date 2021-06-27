<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content2 extends Model
{
    protected $table = "content2s";
 
    protected $fillable = ['file','keterangan'];
}
