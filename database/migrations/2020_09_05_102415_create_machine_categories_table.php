<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\MachineCategory;

class CreateMachineCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->timestamps();
        });

        $categories = [
            ['name' => 'Экскаваторы', 'code' => 'excavators'],
            ['name' => 'Краны', 'code' => 'cranes'],
            ['name' => 'Самосвалы', 'code' => 'dumps'],
            ['name' => 'Погрузчики', 'code' => 'loaders'],
            ['name' => 'Экскаватор-погрузчики', 'code' => 'excavators_loaders'],
            ['name' => 'Бульдозеры', 'code' => 'bulldozers'],
            ['name' => 'Воровайки', 'code' => 'trucks'],
            ['name' => 'Катки', 'code' => 'rolls'],
        ];

        foreach ($categories as $category) {
            $machine_category = new MachineCategory();
            $machine_category->name = $category['name'];
            $machine_category->code = $category['code'];
            $machine_category->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machine_categories');
    }
}
