<?php

namespace Database\Seeders;

use App\Models\Subscriber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscriber::create([
            'name' => 'Abraão Ribeiro',
            'email' => 'abraaobeiro@gmail.com'
        ]);

        Subscriber::factory(1000)->create();
    }
}
