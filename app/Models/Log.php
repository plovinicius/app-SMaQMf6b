<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Log extends Model
{
    protected $fillable = [
        'auditable_type', 'auditable_id', 'action', 'fields'
    ];

    protected $casts =  [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y'
    ];

    public function auditable(): MorphTo
    {
        return $this->morphTo();
    }
}
