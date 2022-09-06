<?php

namespace App\Services\Categories;

use App\Models\Items\Category;

class CategoryService
{

    public Category $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    public function get($id)
    {
        $category = $this->categoryModel->find($id);
        return $category;
    }

    public function update($id, $newCategory)
    {
        $category = $this->get($id);
        $category->update($newCategory);
    }

    public function create($newCategory)
    {
        $this->categoryModel::create($newCategory);
    }

    public function destroy($id)
    {
        $this->categoryModel::destroy($id);
    }
}
