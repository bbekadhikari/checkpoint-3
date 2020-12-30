<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proimage extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
