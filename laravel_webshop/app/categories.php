<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model {
    public function products() {
        return $this->belongsToMany('App\product');
    }
}
