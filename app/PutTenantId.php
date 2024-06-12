<?php

namespace App;

use Illuminate\Support\Facades\Log;

trait PutTenantId
{
    protected static function boot()
    {
        parent::boot();

        $putTenantIdCallback = function ($model) {
            $tenantId = (int) session()->get('tenant_id');
            Log::info("Buscando o tenant_id: $tenantId");
            $model->tenant_id = $tenantId;
        };

        static::creating($putTenantIdCallback);
    }
}
