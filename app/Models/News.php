<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected function casts(): array
    {
        return [
            'publish_at' => 'datetime',
        ];
    }
}
