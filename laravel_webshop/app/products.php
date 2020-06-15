<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model {
    protected $fillable = ['image_path', 'title', 'description', 'price', 'category_id'];

    public function categories() {
        return $this->belongsToMany('App\category');
    }
}
