<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    public $with = [
        'categoryParameter'
    ];

    public function categoryParameter() {
        return $this->belongsTo(CategoryParameter::class);
    }
}
