<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $table = 'authors';

    // Get the posts for one author
    public function posts()
    {
        return $this->hasMany('App\Posts','id');
    }

}
