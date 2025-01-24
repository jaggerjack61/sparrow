<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'subject' => 'Hello',
                'message' => 'Hello, how are you?',
                'is_read' => false,
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'subject' => 'Hello again',
                'message' => 'Hello, how are you again?',
                'is_read' => true,
            ],
            [
                'name' => 'John Smith',
                'email' => 'jsmith@email.com',
                'subject' => 'Hello once more',
                'message' => 'Hello, how are you once more?',
                'is_read' => false,
            ],
            ];
        Message::insert($messages);
    }
}
