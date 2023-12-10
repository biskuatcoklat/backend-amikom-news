<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'link',
        'category_news_id', // Add 'is_read' to the fillable attributes
    ];


    public function category()
    {
        return $this->belongsTo(CategoryNews::class, 'category_news_id');
    }
}
