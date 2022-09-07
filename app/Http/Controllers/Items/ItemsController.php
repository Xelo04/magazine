<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use App\Services\Items\ItemsService;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public ItemsService $itemsService;

    public function __construct(ItemsService $itemsService)
    {
        $this->itemsService = $itemsService;
    }

    public function list()
    {
        $items = $this->itemsService->list();
        return response()->json(['items' => $items]);
    }
}
