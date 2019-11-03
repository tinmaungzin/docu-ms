<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentHistory extends Model
{
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
