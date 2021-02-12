<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'cicle_id', 'title', 'img', 'description',
    ];

    public function cicle(){
        return $this->belongsTo(Cicle::class, 'cicle_id');
    }

}
