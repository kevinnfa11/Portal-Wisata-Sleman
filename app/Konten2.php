<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten2 extends Model
{
     protected $table = 'konten2s';
     protected $fillable = [
     	'id',
     	'gambar',
     	'keterangan'
     ];
}
