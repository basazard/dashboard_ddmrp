<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_product',
        'value',
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'id_product');
    }
}
