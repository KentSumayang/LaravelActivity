<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SumayangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> 'Kent James',
            'email' => '21103821@usc.edu.ph',
            'password' => '1234'
            //
        ];
    }
}
