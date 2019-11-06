<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @property int id
 * @property string title
 * @property string abstract
 * @property string filename
 * @property mixed related
 * @method static find(int $id)
 * @method static chunk(int $chunk, $callback)
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

    public function related()
    {
        return $this->hasMany(RelatedDocument::class, 'document_id');
    }

    public function getRelatedDocuments()
    {
        $related_documents = collect();
        foreach ($this->related as $related_doc) {
            $doc = Document::find($related_doc->related_document_id);
            $related_documents->push($doc);
        }
        return $related_documents;
    }
}
