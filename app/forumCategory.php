<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forumCategory extends Model
{
    protected $fillable = ['name','description'];


    public function Topics() {
        return $this->hasMany(forumTopic::class);
    }
}
