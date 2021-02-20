<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

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
        'name', 'surname', 'email', 'password', 'remember_token', 
        'cicle_id',  
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function applieds()
    {
        return $this->hasMany(Applied::class);
    }

    public function cicle(){
        return $this->belongsTo(Cicle::class, 'cicle_id');
    }
}
