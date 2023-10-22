<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Leftaligned extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['desc'];
    protected $table='leftaligned';
    protected $guarded=[];
}
