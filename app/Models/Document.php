<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = ['id'];
    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function document_histories()
    {
        return $this->hasMany(DocumentHistory::class);
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
