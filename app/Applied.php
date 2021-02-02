<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applied extends Model
{
    protected $table = 'applieds';

    protected $fillable = [
        'offer_id', 'user_id',
    ];

    /*
    mirar para que sirve, no entiendo porque se puso con alumno solo en algunos modelos, no todos

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    */
}
