<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property string abstract
 * @property string filename
 */
class Document extends Model
{
    protected $guarded = ['id'];

    public function keywords()
    {
        return $this->hasMany(Keyword::class, 'document_id');
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

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
