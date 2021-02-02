<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

    protected $fillable = [
        'cicles_id', 'headline', 'description', 'date_max', 'num_candidates',
    ];
}
