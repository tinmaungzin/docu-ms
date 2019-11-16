<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @method static create(array $array)
 */
class Hod extends Authenticatable
{
    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
