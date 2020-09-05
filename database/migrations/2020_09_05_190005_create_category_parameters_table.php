<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\CategoryParameter;

class CreateCategoryParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('machine_category_id')->constrained();
            $table->timestamps();
        });

        foreach (config('parameters') as $parameter) {
            foreach ($parameter['list'] as $element) {
                $data = new CategoryParameter();
                $data->machine_category_id = $parameter['id'];
                $data->name = $element;
                $data->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_parameters');
    }
}
