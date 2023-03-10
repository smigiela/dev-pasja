<?php

namespace App\Blog\Category\Infrastructure;

use App\Blog\Category\Domain\CategoryRepositoryInterface;
use App\Models\Admin\Blog\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function findById(int $id): Category
    {
        // TODO: Implement findById() method.
    }

    public function save(Category $category): void
    {
        // TODO: Implement save() method.
    }

    public function getWithPosts(Category $category): Category
    {
        // TODO: Implement getWithPosts() method.
    }

}
