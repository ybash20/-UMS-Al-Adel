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
        $grade30 = $this->faker->numberBetween(5, 50);
        $grade70 = $this->faker->numberBetween(5, 50);
        $grade100 = $grade30 + $grade70;
        $spoint = $grade100 / 20;

        return [
            'Student_ID' => 7,
            'Course_ID' => $this->faker->unique()->numberBetween(1, 44),
            'Grade_30' => $grade30,
            'Grade_70' => $grade70,
            'Grade_100' => $grade100,
            'Spoint' => $spoint,
            'Semester' => $this->faker->numberBetween(1, 8),
        ];
    }
}
