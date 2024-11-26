<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'country',
        'address',
        'notes',
        'postal_code',
        'latitude',
        'longitude',
        'locationable_id',
        'locationable_type',
    ];

    protected $primaryKey = 'id';
}
