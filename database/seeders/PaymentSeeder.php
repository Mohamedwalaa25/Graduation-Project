<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Payment::create([
            'name' => 'PayPal',
            'status' => true,
        ]);

        \App\Models\Payment::create([
            'name' => 'MyFatoorah',
            'status' => true,
        ]);
        
      
    }
}
