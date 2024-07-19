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
    $faker = FakerFactory::create('ar_SA'); 
    $transliterator = \Transliterator::create('Any-Latin; Latin-ASCII');

    // توليد الأسماء العربية
    $firstName = $faker->firstName;
    $fatherName = $faker->firstNameMale;
    $grandFatherName = $faker->firstNameMale;
    $lastName = $faker->lastName;

    // إنشاء الاسم الرباعي بالعربية
    $nameArabic = "{$firstName} {$fatherName} {$grandFatherName} {$lastName}";

    // تحويل الاسم الرباعي إلى الإنجليزية
    $nameEnglish = $transliterator->transliterate($nameArabic);

    return [
        'Name_English' => $nameEnglish,
        'Name_Arabic' => $nameArabic,
        'Major_ID' => 1,
        'Level_ID' => 4,
        'Code' => 123,
        'Gender' => $faker->numberBetween(0, 1),
        'DOB' => $faker->dateTimeBetween('2000-01-01', '2002-12-31')->format('Y-m-d'),
        'Email' => $faker->unique()->safeEmail,
        'Phone_number' => $faker->phoneNumber,
        'Address_ID' => $faker->numberBetween(2, 5),
        'Status' => $faker->randomElement(['Single', 'Married']),
        'Not_Allowed_Show' => 1,
    ];
}
}
