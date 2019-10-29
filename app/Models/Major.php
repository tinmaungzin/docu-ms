<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    public function submajors()
    {
        return $this->hasMany(Submajor::class);
    }
}
