<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    protected $table='driver';
    protected $fillable = [
        'name',
        'Age',
        'Contact',
        'City',
        'Address',
        'A_Contact',
        'D_L',
        'image',
        'Status',
        'L_no',
        'Date'
        

    ];

    
}
