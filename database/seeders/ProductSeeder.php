<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $macbook = Category::where('name', 'Macbook')->first();
        $gaming = Category::where('name', 'Gaming')->first();
        $mainstream = Category::where('name', 'Mainstream')->first();

        Product::create([
            'name' => 'Macbook Pro',
            'description' => 'Powerful and portable, with a stunning Retina display.',
            'price' => 20000000,
            'category_id' => $macbook->id
        ]);

        Product::create([
            'name' => 'Alienware M15',
            'description' => 'The ultimate gaming machine with cutting-edge hardware.',
            'price' => 30000000,
            'category_id' => $gaming->id
        ]);

        Product::create([
            'name' => 'HP Pavilion',
            'description' => 'A great value laptop for everyday use.',
            'price' => 10000000,
            'category_id' => $mainstream->id
        ]);
    }
}
