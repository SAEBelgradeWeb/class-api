<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Product::factory(100)->create()->each(function($product) {
            $tags = Tag::inRandomOrder()->take(rand(1, 3))->get();
            $product->tags()->attach($tags);
         });
    }
}
