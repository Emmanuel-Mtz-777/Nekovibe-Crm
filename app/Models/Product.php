<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded=[];

    // Importante: puedes usar 'use HasFactory;' si usas factories

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function providers() {
        return $this->belongsToMany(Provider::class, 'provider_product')
                    ->withPivot('cost_price')
                    ->withTimestamps();
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'order_product')
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }

    public function sales() {
        return $this->belongsToMany(Sale::class, 'sale_product')
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }
}
