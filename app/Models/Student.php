<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @method static find($id)
 */
class Student extends Authenticatable
{
    protected $guarded = ['id'];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class,'owner_id');
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}
