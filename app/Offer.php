<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    
    protected $fillable = [
        'cicle_id', 'headline', 'description', 'date_max',
    ];

    public function cicle(){
        return $this->belongsTo(Cicle::class, 'cicle_id');
    }

    public function applieds()
    {
        return $this->hasMany(Applied::class);
    }
}
