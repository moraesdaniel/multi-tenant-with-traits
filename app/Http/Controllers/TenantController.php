<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TenantController extends Controller
{
    public function index(): View
    {
        return view('tenant.tenant');
    }

    public function store(Request $request): View
    {
        session()->put('tenant_id', $request->get('tenant_id'));
        Log::info("Salvando o tenant_id: {$request->get('tenant_id')}");
        return view('item.item');
    }
}
