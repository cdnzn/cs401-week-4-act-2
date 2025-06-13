<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    public function posts(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
