<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BOM extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_product',
        'level',
        'item',
        'quantity',
        'unit',
        'moq',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
