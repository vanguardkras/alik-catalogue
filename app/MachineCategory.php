<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MachineCategory extends Model
{

    /**
     * Найти id по имени категории
     *
     * @param string $name
     * @return mixed
     */
    public static function getCategoryByName(string $name)
    {
        return self::where('code', $name)->first();
    }

    /**
     * Все параметры категории
     *
     * @return mixed
     */
    public function categoryParameters()
    {
        return $this->hasMany(CategoryParameter::class);
    }
}
