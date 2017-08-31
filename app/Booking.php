<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Booking extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * `user_id``arrival_date``departure_date``price_from``price_to`
     * @var array
     */
    protected $table = 'booking';
    protected $fillable = [
        'user_id', 'arrival_date', 'departure_date','price_from','price_to','guest_info','room_info','options'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   // protected $hidden = [];
}
