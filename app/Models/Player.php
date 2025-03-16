<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'names';
    protected $fillable = ['last_name', 'ign'];
}
