<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPromos extends Model
{
    use HasFactory;
    protected $fillable = [
        'promo_id',
        'product_id',
        'discount'
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
