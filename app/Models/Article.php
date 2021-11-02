<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'title',
        'content',
        'created_at',
        'image_url',
        'votes',
        'category_id'
    ];
    protected $table = 'articles';
}
