<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Blog extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title', 'desc'];
    protected $guarded = [];

    public function tags(){
        return $this->belongsToMany(Tag::class, 'blogs_tags','blog_id','tag_id');
    }
}
