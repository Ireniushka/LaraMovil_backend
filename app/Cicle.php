<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    protected $table = 'cicles';

    protected $fillable = [
        'name', 'img',
    ];

    public function offers(){
        return $this->hasMany(Offer::class);
    }
}
