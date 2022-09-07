<?php

namespace App\Services\Items;

use App\Models\Items\Item;

class ItemsService
{

    public Item $itemModel;

    public function __construct(Item $itemModel)
    {
        $this->itemModel = $itemModel;
    }

    public function list()
    {
        $items = $this->itemModel->with("category")->get();
        return $items;
    }
}
