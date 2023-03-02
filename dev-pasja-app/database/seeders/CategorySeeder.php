<?php

namespace Database\Seeders;

use App\Models\Admin\Blog\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->count(30)->create();

        foreach (Category::all() as $id => $category) {

            if ($id % 5 == 0.0) {
                $category->parent()->associate(Category::find(rand(1,3)));

                $category->save();
            }
        }
    }
}
