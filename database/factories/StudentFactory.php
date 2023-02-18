<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Student::class;
    public function definition()
    {
        $city_id = ['1','2','3','4','5'];
        return [
        'name' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'city_id' => $this->faker->randomElement($city_id),
        
    ];
    }
}
