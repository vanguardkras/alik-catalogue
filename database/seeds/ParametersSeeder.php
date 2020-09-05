<?php

use Illuminate\Database\Seeder;
use App\Parameter;

class ParametersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Parameter::class, 60)->create();
    }
}
