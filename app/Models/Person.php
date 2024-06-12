<?php

namespace App\Models;

use App\PutTenantId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    use PutTenantId;

    protected $fillable = [
        'id', 'name'
    ];
}
