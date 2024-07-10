<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;



class studentFactory extends Factory
{
    protected $model = student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $faker = FakerFactory::create('ar_SA'); // تحديد اللغة العربية

        return [
            'Name' => $faker->firstName . ' ' . $faker->lastName . ' ' . $faker->lastName,
            'Major_ID' => 1,
            'Level_ID' => 4,
            'Code' => 123,
            'Address_ID' => $faker->numberBetween(1, 0),
            'DOB' => $faker->dateTimeBetween('2000-01-01', '2002-12-31')->format('Y-m-d'),
            'Email' => $faker->unique()->safeEmail,
            'Phone_number' => $faker->phoneNumber,
            'Address_ID' => $faker->numberBetween(1, 3),
            'Status' => $faker->randomElement(['Single', 'Married']),
            'Not_Allowed_Show' => 1,
        ];
    }
}
