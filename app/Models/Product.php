<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'sku', 'stock'
    ];

    public function logs(): MorphMany
    {
        return $this->morphMany(Log::class, 'auditable');
    }
}
