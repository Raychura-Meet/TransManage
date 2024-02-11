<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{

    protected $table='customer';
    protected $fillable = [
        'name',
        'Contact',
        'City',
        'Address',
        'A_Contact',
        'Status',

        

    ];

    
}
