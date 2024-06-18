<?php

namespace App\Models;

use App\TenantIdTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    use TenantIdTrait;

    protected $fillable = [
        'id', 'description'
    ];
}
