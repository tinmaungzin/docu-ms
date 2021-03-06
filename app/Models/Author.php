<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 */
class Author extends Model
{
    public function documents()
    {
        return $this->belongsToMany(Document::class);
    }
}
