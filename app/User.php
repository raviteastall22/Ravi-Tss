<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
//use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
class User extends Authenticatable {
    protected $collection = 'transporters';
    protected $connection = 'mongodb';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'comp_name', 'country', 'city', 'transporter_name', 'email', 'mobile', 'designation',  'vehicle_type', 'no_of_vehicle', 'service', 'brokerage', 'status', 'transport_username', 'password', 
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
