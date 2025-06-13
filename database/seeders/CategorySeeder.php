<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
class CategorySeeder extends Seeder
{

    use HasFactory;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(15)->create();
    }
}
