<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index(): View
    {
        return view('tenant.tenant');
    }

    public function store(Request $request): View
    {
        session()->put('tenant_id', $request->get('tenant_id'));

        $items = Item::all();
        return view('item.item', ['items' => $items]);
    }
}
