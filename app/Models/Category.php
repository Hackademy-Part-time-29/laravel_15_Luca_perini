<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];
    public function articles(){
        //quando presentiamo una relazione "many-to-many" utilizziamo belongsToMany,
        //collegandoci al modello utilizzato (Category)
                return $this->belongsToMany(Article::class);
            }
}
