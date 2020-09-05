<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MachineCategory extends Model
{
    /**
     * Все параметры категории
     *
     * @return mixed
     */
    public function categoryParameters() {
        return $this->hasMany(CategoryParameter::class);
    }
}
