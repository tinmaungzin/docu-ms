<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $guarded = ['id'];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class);
    }

    public function checkBookmark($document_id, $student_id){
        $bookmark = $this->where('document_id', $document_id)->where('student_id',$student_id);
        return $bookmark;
    }
}
