<?php

namespace App\Models;

use App\PutTenantId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    use PutTenantId;

    protected $fillable = [
        'id', 'description'
    ];
}
