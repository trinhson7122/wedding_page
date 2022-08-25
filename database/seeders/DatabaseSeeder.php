<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Type::factory()->create([
            'name' => 'Ngoài trời'
        ]);
        Type::factory()->create([
            'name' => 'Hội trường khách sạn'
        ]);
        Type::factory()->create([
            'name' => 'Tư gia'
        ]);
        Category::factory(10)->create();
        Product::factory(40)->create();
        Account::factory(20)->create();
    }
}
