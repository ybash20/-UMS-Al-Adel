<?php

namespace App\Http\Controllers;

use App\Helpers\UMS;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\student;
use App\Models\Grades_Student;
use Illuminate\Http\Request;

class StudentControllerProfile extends UMSController
{
    public function updatePassword(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'newPassword' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->route('updatePassword')->with('error', $validator->errors()->first());
        }

        // Update password logic
        $studentId = session('student_id'); // Assuming student is logged in and session contains student_id
        if (!$studentId) {
            return redirect()->route('StudentgetLogin')->with('message', 'Please login to update password.');
        }

        $newPassword = $request->input('newPassword');

        // Update student record in database
        $updated = Student::where('id', $studentId)->update(['Code' => $newPassword]);

        if (!$updated) {
            return redirect()->route('updatePassword')->with('error', 'Failed to update password.');
        }

        return redirect()->route('updatePassword')->with('success', 'Password updated successfully.');
    }
}
