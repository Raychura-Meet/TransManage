<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
protected $table='vehicle';
    protected $fillable = [
        'company',
        'image',
        'puc',
        "insurance",
        'model',
        'Number_Plate',
        'Total_km',
        'Insurance_no',
        'P_Date',
        'I_Date'


    ];
}