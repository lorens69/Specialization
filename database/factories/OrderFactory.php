<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total' => $this->faker->randomFloat(2, 100, 1000),
            'VAT' => $this->faker->randomFloat(2,10,0.12),
            'order_type'=>$this->faker->randomElement(['pick_up' , 'delivery'])

        ];
    }
}
