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
        // توليد قيم عشوائية للدرجات
        $grade30 = $this->faker->numberBetween(5, 50);
        $grade70 = $this->faker->numberBetween(5, 50);
        $grade100 = $grade30 + $grade70;
    
        // التحقق من الحدود
        if ($grade100 > 100) {
            $grade100 = 100;
        } elseif ($grade100 < 0) {
            $grade100 = 0;
        }
    
              // تعيين القيمة للعمود Note بناءً على القيمة المحددة
              $note = '';
              if (in_array($grade100, [89, 79, 64, 49])) {
                  $grade100 += 1;
                  $note = '+1';
              }
        // تعيين النقاط
        $spoint = $grade100 / 20;
    
        
        // تعيين التقدير باللغة العربية والإنجليزية بناءً على قيمة Grade_100
        $appreciationArabic = '';
        $appreciationEnglish = '';
    
        if ($grade100 >= 0 && $grade100 <= 49) {
            $appreciationArabic = 'ضعيف';
            $appreciationEnglish = 'Poor';
        } elseif ($grade100 >= 50 && $grade100 <= 64) {
            $appreciationArabic = 'مقبول';
            $appreciationEnglish = 'Acceptable';
        } elseif ($grade100 >= 65 && $grade100 <= 79) {
            $appreciationArabic = 'جيد';
            $appreciationEnglish = 'Good';
        } elseif ($grade100 >= 80 && $grade100 <= 89) {
            $appreciationArabic = 'جيد جدا';
            $appreciationEnglish = 'Very Good';
        } elseif ($grade100 >= 90 && $grade100 <= 100) {
            $appreciationArabic = 'ممتاز';
            $appreciationEnglish = 'Excellent';
        }
    
    
        // إرجاع البيانات النهائية
        return [
            'Student_ID' => 5,
            'Course_ID' => $this->faker->unique()->numberBetween(1, 44),
            'Grade_30' => $grade30,
            'Grade_70' => $grade70,
            'Grade_100' => $grade100,
            'Spoint' => $spoint,
            'Semester' => $this->faker->numberBetween(1, 8),
            'Appreciation_Arabic' => $appreciationArabic,
            'Appreciation_English' => $appreciationEnglish,
            'Note' => $note,
        ];
    }
    
}
