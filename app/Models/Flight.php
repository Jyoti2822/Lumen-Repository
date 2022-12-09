<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table='created_db_table';
    protected $primaryKey='flight_id';
    protected $fillable=[
        'FlightName','CityName','PessengerName'
    ];
}
