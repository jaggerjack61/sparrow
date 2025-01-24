<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pricings = Pricing::all();
        foreach($pricings as $pricing) {
            $pricing->items()->createMany([
                [
                    'description' => 'Item 1 description',
                ],
                [
                    'description' => 'Item 2 description',
                ],
                [
                    'description' => 'Item 3 description',
                ],
            ]);
        }
    }
}
