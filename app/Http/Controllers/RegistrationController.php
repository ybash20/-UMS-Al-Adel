<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\marital;
use App\Models\registration;
use App\Models\blood;
use App\Models\certificate;
use App\Models\guardian;
use App\Models\qualification;
use App\Models\address;
use App\Models\identity_types;
use App\Models\major;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use crocodicstudio\crudbooster\helpers\CRUDBooster;

class RegistrationController extends Controller
{

    public function index()
    {
        // جلب كافة البيانات من الجداول المرتبطة
        $maritals = Marital::all();
        $bloods = Blood::all();
        $certificates = Certificate::all();
        $addresses = Address::all();
        $qualifications = Qualification::all();
    }

    public function create()
    {
        $maritalStatuses = Marital::pluck('Status', 'id');
        $bloodTypes = Blood::pluck('Type', 'id');
        $identityTypes = identity_types::pluck('Name', 'id');
        $qualificationType = DB::table('qualification_type')->pluck('Name','id');
        $disciplines = DB::table('disciplines')->pluck('Name','id');

        // جلب التخصصات حسب الكليات
        $majorsComputerScience = Major::where('College_ID', 1)->pluck('name', 'id');
        $majorsAdministration = Major::where('College_ID', 2)->pluck('name', 'id');
        $majorsIslamicStudies = Major::where('College_ID', 3)->pluck('name', 'id');
        $majorsSharia = Major::where('College_ID', 4)->pluck('name', 'id');
        $majorsLanguages = Major::where('College_ID', 6)->pluck('name', 'id');

        return view('registration', compact(
            'maritalStatuses',
            'bloodTypes',
            'identityTypes',
            'qualificationType',
            'disciplines',
            'majorsAdministration',
            'majorsLanguages',
            'majorsSharia',
            'majorsIslamicStudies',
            'majorsComputerScience'
        ));
    }
    public function post_reg(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'Nationality' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'marital_status' => 'required|integer|exists:marital,Marital_ID',
            'blood_type' => 'required|integer|exists:blood,Blood_ID',
            'city' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'issue_location' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|boolean',
            'current_address' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'id_type' => 'required|integer|exists:identity,Identity_ID',
            'id_number' => 'required|string|max:50',
            'landline' => 'nullable|string|max:20',
            'seat_number' => 'required|integer',
            'department' => 'required|string|max:255',
            'percentage' => 'required|numeric|min:0|max:100',
            'governorate' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'total_marks' => 'required|integer',
            'academic_year' => 'required|string|regex:/^\d{4}-\d{4}$/',
            'final_grade' => 'required|numeric|min:0|max:100',
            'certificate_date' => 'required|date',
            'school' => 'required|string|max:255',
            'administration_science_specialization' => 'integer|exists:qualifications,Qualification_ID',
            'language_translation_specialization' => 'integer|exists:qualifications,Qualification_ID',
            'computer_science_specialization' => 'integer|exists:qualifications,Qualification_ID',
            'sharia_law_specialization' => 'integer|exists:qualifications,Qualification_ID',
            'islamic_studies_specialization' => 'integer|exists:qualifications,Qualification_ID',
            'occupation' => 'required|string|max:255',
            'workplace' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'guardian_name' => 'required|string|max:255',
            'guardian_name2' => 'nullable|string|max:255',
            'phone_number' => 'required|string|max:20',
            'phone_number2' => 'nullable|string|max:20',
            'telephone_fix' => 'nullable|string|max:20',
            'telephone_fix2' => 'nullable|string|max:20',
            'relationship' => 'required|string|max:255',
            'relationship2' => 'nullable|string|max:255'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();
            return redirect()->back()->with(['message' => implode('<br>', $message), 'message_type' => 'danger']);
        }

        try{
            DB::beginTransaction();

            DB::table('registration')->insert([
                "Name" => $request->name,
                "Date" => now(),
                "Gender" => $request->gender,
                "Nationality" => $request->Nationality,
                "DOB" => $request->date_of_birth,
                "Place_of_birth" => $request->place_of_birth,
                "Marital_ID" => $request->marital_status,
                "Blood_ID" => $request->blood_type,
                "Mobile_Phone_No" => $request->mobile,
                "Landline_No" => $request->mobile,

                "Identity_ID" => $request->id_type,
                "Address_ID" => 1, // Set the appropriate address ID
                "Major_ID" => 1, // Set the appropriate major ID
                "Certificate_ID" => 1, // Set the appropriate certificate ID
                "Qualification_ID" => 1, // Set the appropriate qualification ID
            ]);

            DB::table('guardians')->insert([
                'Registration_ID' => DB::getPdo()->lastInsertId(), // Get last inserted ID for registration
                'Name' => $request->guardian_name,
                'Relationship' => $request->relationship,
                'Profession' => $request->occupation,
                'Workplace' => $request->workplace,
                'Phone_No' => $request->phone_number,
                'Landline_No' => $request->landline,

                'Address_ID' => 1, // Set the appropriate address ID
            ]);

            DB::table('identity')->insert([
                'Type' => $request->id_type,
                'No' => $request->id_number,
                'Issue_Date' => $request->issue_date,
                'Issuing_Authority' => $request->issue_location,
            ]);

            DB::table('certificate')->insert([
                'Name' => $request->school,
                'Graduation_Year' => explode('-', $request->academic_year)[1], // Extract year from academic year
                'Disciplines' => $request->department,
                'Maximum_Pass_Grade' => 100, // Assuming 100 is the max pass grade
                'Total_Grades' => $request->total_marks,
                'Percentage' => $request->percentage,
                'Issue_Date' => $request->certificate_date,

                'Qualification_ID' => 1, // Set the appropriate qualification ID
            ]);

            DB::table('qualifications')->insert([
                'Name' => $request->school,
                'Description' => 'Qualification description', // Provide appropriate description
                'Level' => 'Bachelor', // Provide appropriate level
                'Institution' => 'University Name', // Provide appropriate institution
                'Address_ID' => 1, // Set the appropriate address ID
                'Country' => 'Country Name', // Provide appropriate country
            ]);

            DB::commit();

            CRUDBooster::insertLog("test Reg success", $request->all());
            return redirect()->back()->with(['message' => "test reg success", 'type' => 'success']);
        } catch (\Exception $e) {
            DB::rollBack();
            $message = $e->getMessage();
            CRUDBooster::insertLog("test reg failed", $message);
            return redirect()->back()->with(['message' => $message, 'type' => 'danger']);
        }
    }
}
