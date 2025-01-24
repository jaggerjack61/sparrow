<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = ['name', 'price', 'period', 'status', 'selected', 'description'];

    public function items()
    {
        return $this->hasMany(PricingItem::class, 'pricing_id', 'id');
    }
}
