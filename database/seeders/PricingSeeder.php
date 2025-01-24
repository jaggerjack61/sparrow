<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [
            [
                'name' => 'Basic',
                'price' => 9.99,
                'description' => 'Basic plan',
                'period' => 'week',
                'selected' => false,
            ],
            [
                'name' => 'Standard',
                'price' => 19.99,
                'description' => 'Standard plan',
                'period' => 'month',
                'selected' => true,
            ],
            [
                'name' => 'Premium',
                'price' => 99.99,
                'description' => 'Premium plan',
                'period' => 'year',
                'selected' => false,
            ],
        ];
        Pricing::insert($prices);
    }
}
