<?php

namespace Tests\Feature\Blog;

use App\Models\Admin\Blog\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_category()
    {
        $this->actingAs(User::factory()->create())->post('/categories', ['name' => 'new category']);

        $this->assertCount(1, Category::where('name', 'new category')->get());
        $this->assertDatabaseCount('categories', 1);
    }
}
