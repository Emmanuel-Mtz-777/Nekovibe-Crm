<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    protected $guarded=[];

    public function products() {
    return $this->belongsToMany(Product::class, 'provider_product')
                ->withPivot('cost_price')
                ->withTimestamps();
}
}
