<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
//    protected $fillable = ['title','abstract','pdf_file','author_name'];
    protected $guarded = ['id'];
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
