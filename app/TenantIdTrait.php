<?php

namespace App;

trait TenantIdTrait
{
    protected static function boot()
    {
        parent::boot();

        $putTenantIdCallback = function ($model) {
            $tenantId = (int) session()->get('tenant_id');
            $model->tenant_id = $tenantId;
        };

        static::creating($putTenantIdCallback);
        static::addGlobalScope(new TenantScope);
    }
}
