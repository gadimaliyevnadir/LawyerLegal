<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Blockquote extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['desc'];
    protected $guarded=[];
}
