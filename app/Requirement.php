<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $table = 'requirements';

    protected $fillable = [
        'offer_id', 'headline', 'description',
    ];
}
