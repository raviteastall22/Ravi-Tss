<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//
class Singleowner extends Eloquent  {
    protected $collection = 'singleowners';
    protected $connection = 'mongodb';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'comp_name', 'country', 'city', 'name',  'owner_mobile', 'service', 'status', 'username', 'password', 
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
