<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Log;

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $tableName = $model->getTable();
        $tenantId = (int) session()->get('tenant_id');

        $builder->where($tableName . '.tenant_id', $tenantId);
    }
}
