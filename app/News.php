<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $fillable = ['subject', 'content', 'image', 'auteur'];
}
