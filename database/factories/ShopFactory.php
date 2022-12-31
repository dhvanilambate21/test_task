<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'shop_name' => $this->faker->name(),
            'shop_email' => $this->faker->email(),
            'shop_address' => $this->faker->address(50),
            'shop_image' =>  $this->faker->image(storage_path('images'), 300, 300),
        ];
    }
}
