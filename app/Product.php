<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function proimage()
    {
        return $this->hasMany(Proimage::class);
    }
}
