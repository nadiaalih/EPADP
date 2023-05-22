<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class handsat extends Model
{
    use HasFactory;
    protected $table ='handsat';
    protected $fillable=['name','image','paid'];
}
