<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'driver';
    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'phone_number',
        'date_of_birth',
        'bank_account',
        'bank_holder',
        'vehicle_type',
        'driver_license_num',
        'password',
        'license'
    ];

    protected $primaryKey = 'driver_id';
}
