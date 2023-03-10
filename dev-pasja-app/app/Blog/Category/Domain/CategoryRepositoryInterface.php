<?php

namespace App\Blog\Category\Domain;


use App\Models\Admin\Blog\Category;

/**
 * Interfejs repozytorium kategorii
 */
interface CategoryRepositoryInterface
{
    public function findById(int $id): Category;
    public function save(Category $category) : void;
    public function getWithPosts(Category $category): Category;
}
