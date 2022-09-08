<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $manufacturer = ['Apple', 'Samsung', 'Vivo', 'Mi', 'Oppo'];
        $year = ['2018', '2019', '2020', '2021', '2022'];
        $mp = rand(10000, 100000);
        $max_retail = rand(50, 80)/100 * $mp;
        return [
            'manufacturer'=> $manufacturer[array_rand($manufacturer, 1)],
            'year'=> $year[array_rand($year, 1)],
            'name'=> fake()->text(20),
            'marked_price' => $mp,
            'max_retail' => $max_retail,
        ];
    }
}
