<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingItem extends Model
{
    protected $fillable = ['description', 'pricing_id', 'status'];
}
