<?php

namespace Database\Factories;

use App\Models\Grades_Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class Grades_StudentFactory extends Factory
{
    protected $model = Grades_Student::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'Student_ID' => 3,
            'Course_ID' => $this->faker->unique()->numberBetween(1, 25),
            'Grade_30' => $this->faker->numberBetween(5, 50),
            'Grade_70' => $this->faker->numberBetween(5, 50),
            'Semester' => $this->faker->numberBetween(1, 8),
            
        ];
    }
}
