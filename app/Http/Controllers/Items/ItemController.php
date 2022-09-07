<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use App\Services\Items\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public ItemService $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    public function update($id, Request $request)
    {
        $item = $request->get("item");
        $this->itemService->update($id, $item);
    }

    public function create(Request $request)
    {
        $item = $request->get("item");
        $this->itemService->create($item);
    }

    public function destroy($id)
    {
        $this->itemService->destroy($id);
    }
}
