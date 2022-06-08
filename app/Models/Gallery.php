<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'title', 'desc', 'link', 'image'];
}
