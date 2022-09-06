<?php

namespace App\Services\Categories;

use App\Models\Items\Category;

class CategoriesService
{

    public Category $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    public function list()
    {
        $categories = $this->categoryModel->get();
        return $categories;
    }
}
