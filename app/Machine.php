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

    /**
     * Категория техники
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo(MachineCategory::class, 'machine_category_id');
    }
}
