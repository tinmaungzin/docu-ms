<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    public function submajors()
    {
        return $this->hasMany(Submajor::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
