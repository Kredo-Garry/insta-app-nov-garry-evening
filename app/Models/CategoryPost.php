<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = 'category_post';
    protected $fillable = ['post_id', 'category_id']; // it will received an array of data
    public $timestamps = false;

    /**
     * Use this method to get the name of the category
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
