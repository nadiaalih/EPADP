<?php

namespace App\Models;

use App\Models\publicad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class publicad extends Model
{
    use HasFactory;
    protected $table ='publicad';
    protected $fillable=['name','image','cdid','userid'];
}
