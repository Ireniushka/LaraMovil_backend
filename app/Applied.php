<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applied extends Model
{
    protected $table = 'applieds';

    protected $fillable = [
        'offer_id', 'user_id',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }
    
}
