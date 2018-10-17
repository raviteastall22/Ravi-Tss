<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Jenssegers\Mongodb\Auth\User as Authenticatable;

    class Transporter extends Authenticatable {
        protected $collection = 'transporters';
        protected $connection = 'mongodb';
        use Notifiable;
        //'vehicle_detail',
        protected $fillable = [
            'comp_name', 'country', 'city', 'transporter_name', 'email', 'mobile', 'designation',  'vehicle_type', 'no_of_vehicle', 'service', 'brokerage', 'status', 'transport_username', 'password', 
        ];
        protected $hidden = [
            'password', 'remember_token',
        ];
    }
    