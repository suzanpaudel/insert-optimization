<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Condition>
 */
class ConditionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['independ', 'depend_max', 'depend'];
        $category = ['switch', 'defect', 'warranty', 'accessory', 'condition'];
        return [
            'name' => fake()->name(),
            'category' => $category[array_rand($category, 1)],
            'type' => $type[array_rand($type, 1)],
            'deduction_percent' => rand(10, 50),
            'max_rate' => rand(2000, 5000),
            'min_rate' => rand(5000, 1500),
        ];
    }
}
