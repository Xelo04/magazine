<?php

namespace App\Services\Items;

use App\Models\Items\Item;

class ItemService
{

    public Item $itemModel;

    public function __construct(Item $itemModel)
    {
        $this->itemModel = $itemModel;
    }

    public function get($id)
    {
        $item = $this->itemModel->find($id);
        return $item;
    }

    public function update($id, $newItem)
    {
        $item = $this->get($id);
        $item->update($newItem);
    }

    public function create($newItem)
    {
        $this->itemModel::create($newItem);
    }

    public function destroy($id)
    {
        $this->itemModel::destroy($id);
    }
}
