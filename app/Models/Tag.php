<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable=['slug','name'];
    protected $guarded=[];
    public function blogs()
    {
        return $this->belongsToMany(Blog::class,'blogs_tags','tag_id', 'blog_id');
    }
}
