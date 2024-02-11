<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table='Trip';
    protected $fillable = 
    [
        'Model',
        'Route',
        'Driver',
        'customer',
        'F_Date',
        'T_Date',
        'Mileage',
        'Status',
        'FE',
        'From',
        'To',
        'Cash',
        'Spent',
        'RE',
        'OE',
        'T_S'

   ];
}
