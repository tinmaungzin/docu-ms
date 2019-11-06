<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelatedDocument extends Model
{
    //
    protected $table = 'related_documents';

    protected $fillable = ['document_id', 'related_document_id'];

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }
}
