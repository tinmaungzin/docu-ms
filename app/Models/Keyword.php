<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    //
    protected $table = 'keywords';

    protected $fillable = ['document_id', 'name'];

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

}
