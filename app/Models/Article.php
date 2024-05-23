<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    protected $fillable = ['title' , 'body', 'cover'];
    use HasFactory;
    public function categories(){
                return $this->belongsToMany(Category::class);
            }
}
