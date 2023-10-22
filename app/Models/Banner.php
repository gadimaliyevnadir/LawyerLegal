<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Banner extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title', 'desc'];
    protected $guarded=[];
}
