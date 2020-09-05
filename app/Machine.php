<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    /**
     * Все параметры единицы техники
     *
     * @return mixed
     */
    public function parameters() {
        return $this->hasMany(Parameter::class);
    }
}
