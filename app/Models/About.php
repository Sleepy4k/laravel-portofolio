<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'title', 'name', 'bday', 'phone', 'email', 'bio', 'image', 'cv'];
}
