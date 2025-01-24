<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is the capital of France?',
                'answer' => 'Paris',
            ],
            [
                'question' => 'What is the capital of Germany?',
                'answer' => 'Berlin',
            ],
            [
                'question' => 'What is the capital of Italy?',
                'answer' => 'Rome',
            ],

        ];
        Faq::insert($faqs);

    }
}
