<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'summary', 'body', 'category_id' , 'price', 'user_id', 'slug' , 'image'];
    protected $with = ['category'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function seller() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
