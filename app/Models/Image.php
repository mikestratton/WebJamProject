<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename', 'path', 'mime_type', 'size'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
