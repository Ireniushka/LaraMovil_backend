<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /* **Poner por cada relacion con metodo usuario en su modelo(ejemplo en applied)

    public function fichas()
    {
        return $this->hasMany('App\Worksheet');
    } 
    */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'email_verified_at', 'password', 'remember_token', 
        'cicles_id', 'num_offer_aplied',   
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
