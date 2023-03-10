<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 5; $i++) { 
            \App\Models\Category::factory()->create([
                'name' => 'Category ' . $i,
            ]);            
        }
    }
}
