<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(): View
    {
        return view('item.item');
    }

    public function store(Request $request)
    {
        $item = new Item([
            'id' => $request->get('item_id'),
            'description' => $request->get('item_description')
        ]);

        $item->save();

        return view('item.item');
    }
}
