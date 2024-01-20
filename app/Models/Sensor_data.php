<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor_data extends Model
{
    use HasFactory;
    protected $table='sensor_data';
    protected $fillable = [
        'timestamp',
        'latitude',
        'longitude',
        'license_plate',
        'model',
        'impact_severity',
        'sensor_id',
    ];
}
