<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\User;
use Database\Factories\TransactionFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // User::factory(10)->create();
    public function run(): void
    {
        // $this->call([
        //     AdminSeeder::class,
        //     DrainageSeeder::class,
        //     GroupSeeder::class,
        //     GenusSeeder::class,
        //     OrderSeeder::class,
        //     PhylumSeeder::class,
        //     SectionSeeder::class,
        //     TypeSeeder::class,
        //     FamilySeeder::class,
        //     PlantSeeder::class,
        //     TagSeeder::class,
        //     PlantTagSeeder::class,
        //     PaymentSeeder::class,
        // ]);
        // \App\Models\Articlecategorie::factory(6)->create();
        // \App\Models\Articlesubcategorie::factory(10)->create();
        // \App\Models\Article::factory(30)->create();
        // \App\Models\DescreptionArticle::factory(50)->create();

        User::factory(10)->create()->each(function ($user) {

            TransactionFactory::new()->create(['user_id' => $user->id]);
        });



    }
}
