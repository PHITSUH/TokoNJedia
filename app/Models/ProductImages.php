<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'product_id'
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
