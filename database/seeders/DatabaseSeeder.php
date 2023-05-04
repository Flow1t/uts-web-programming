<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Transaction;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        $user1 = User::create([
            'name' => 'Mr. Vico Lomar',
            'email' => 'vicolomar@gmail.com',
            'password' => bcrypt('12345'),
            'stars' => 120,
            'loyalty' => 'gold'
        ]);

        Transaction::create([
            'coffee' => 'Latte',
            'qty' => 1,
            'purchase_date' => '2023-03-19',
            'user_id' => $user1->id,
        ]);

        Transaction::create([
            'coffee' => 'Espresso',
            'qty' => 1,
            'purchase_date' => '2023-03-20',
            'user_id' => $user1->id,
        ]);

        Transaction::create([
            'coffee' => 'Latte',
            'qty' => 1,
            'purchase_date' => '2023-03-21',
            'user_id' => $user1->id,
        ]);

        $user2 = User::create([
            'name' => 'Ms. Fei Fei Li',
            'email' => 'feifeili@gmail.com',
            'password' => bcrypt('55667'),
            'stars' => 60,
            'loyalty' => 'green'
        ]);

        Transaction::create([
            'coffee' => 'Iced Americano',
            'qty' => 1,
            'purchase_date' => '2023-03-18',
            'user_id' => $user2->id,
        ]);
        Transaction::create([
            'coffee' => 'Iced Latte',
            'qty' => 1,
            'purchase_date' => '2023-03-19',
            'user_id' => $user2->id,
        ]);
        Transaction::create([
            'coffee' => 'Iced Latte',
            'qty' => 1,
            'purchase_date' => '2023-03-21',
            'user_id' => $user2->id,
        ]);

    }
}
