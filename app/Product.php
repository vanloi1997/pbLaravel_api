<?php

namespace App;

use App\BaseModel;

class Product extends BaseModel
{
    protected $table = 'products';

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function provider() {
        return $this->belongsTo('App\Provider');
    }

    public function productType() {
        return $this->belongsTo('App\ProductType');
    }
}
