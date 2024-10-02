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

        $categories = [
            [
                'name' => 'Seeds',
                'image' => 'seeds.jpg',
            ],
            [
                'name' => 'Marrow',
                'image' => 'marrow.jpg',
            ],
            [
                'name' => 'Roots',
                'image' => 'roots.jpg',
            ],
            [
                'name' => 'Leafy Green',
                'image' => 'leafy-green.jpg',
            ],
            [
                'name' => 'Fruits',
                'image' => 'fruits.jpg',
            ],
            [
                'name' => 'Alliums',
                'image' => 'alliums.jpg',
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
