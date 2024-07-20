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
    public function getMajors($collegeId)
    {
        $majors = DB::table('majors')->where('College_ID', $collegeId)->pluck('Name', 'id');

        return response()->json($majors);
    }
    public function getDirectorates($govId)
    {
        $dirs = DB::table('directorates')->where('Governorate_ID', $govId)->pluck('Name_Arabic','Name_English','id');

        return response()->json($dirs);
    }

    public function create()
    {
        $maritalStatuses = Marital::pluck('Status', 'id');
        $bloodTypes = Blood::pluck('Type', 'id');
        $identityTypes = identity_types::pluck('Name', 'id');
        $qualificationType = DB::table('qualification_type')->pluck('Name','id');
        $disciplines = DB::table('disciplines')->pluck('Name','id');
        $colleges = DB::table('colleges')->pluck('Name_Arabic','Name_English','id');
        $gov = DB::table('governorates')->pluck('Name','id');


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
            'majorsComputerScience',
            'colleges',
            'gov'
        ));
    }
    public function post_reg(Request $request){
        $validator = Validator::make($request->all(), [
            // Personal Information
            'nameAR' => 'required|string|max:255',
            'nameEN' => 'required|string|max:255',
            'gender' => 'required|in:0,1',
            'nationality' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'blood_type' => 'required|exists:bloods,id',
            'marital_status' => 'required|exists:maritals,id',

            // Address Information
            'governorate' => 'required|string|max:255',
            'directorate' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'address_notes' => 'nullable|string|max:255',

            // Communication Methods
            'mobile' => 'required|digits_between:9,13',
            'landline' => 'nullable|digits_between:10,15',

            // Identity Information
            'id_type' => 'required|exists:identity_types,id',
            'id_number' => 'required|string|max:255',
            'issue_location' => 'required|string|max:255',
            'issue_date' => 'required|date',

            // Qualifications
            'qualification_Type' => 'required|exists:qualification_type,id',
            'disciplines' => 'required|exists:disciplines,id',
            'institution_name' => 'required|string|max:255',
            'institution_governorate' => 'required|string|max:255',
            'institution_directorate' => 'required|string|max:255',
            'academic_year' => 'required|string|regex:/^\d{4}-\d{4}$/',
            'seat_number' => 'required|integer',
            'total_grades' => 'required|numeric',
            'max_pass_grade' => 'required|numeric',
            'percentage' => 'required|numeric|between:0,100',
            'certificate_date' => 'required|date',

            // Desired Student Specialization
            'majors' => 'required|exists:majors,id',

            // Student Guardian Information
            'guardian_name' => 'required|string|max:255',
            'guardian_relationship' => 'required|string|max:255',
            'guardian_occupation' => 'required|string|max:255',
            'guardian_workplace' => 'required|string|max:255',
            'guardian_phone' => 'required|digits_between:9,13',
            'guardian_landline' => 'nullable|digits_between:7,11',
            'guardian_governorate' => 'required|string|max:255',
            'guardian_directorate' => 'required|string|max:255',

            'guardian_name2' => 'nullable|string|max:255',
            'guardian_name3' => 'nullable|string|max:255',

            'guardian_relationship2' => 'nullable|string|max:255',
            'guardian_relationship3' => 'nullable|string|max:255',

            'guardian_phone2' => 'nullable|digits_between:9,13',
            'guardian_phone3' => 'nullable|digits_between:9,13',

            'guardian_landline2' => 'nullable|digits_between:7,11',
            'guardian_landline3' => 'nullable|digits_between:7,11',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();
            return response()->json(['message' => implode('<br>', $message), 'type' => 'error']);
        }

        try{
            DB::beginTransaction();

            if($request->institution_governorate == 'other'){
                DB::table('directorates')->insert([
                    'Name' => $request->institution_directorate,
                ]);
                $ins_dir_id = DB::getPdo()->lastInsertId();
                DB::table('addresses')->insert([
                    'Directorate_ID' => $ins_dir_id,
                ]);
                $ins_address_id = DB::getPdo()->lastInsertId();
            }
            else{
                DB::table('addresses')->insert([
                    'Directorate_ID' => $request->institution_directorate,
                ]);
                $ins_address_id = DB::getPdo()->lastInsertId();
            }

            DB::table('qualifications')->insert([
                'Qualification_Type_ID' => $request->qualification_Type, // Provide appropriate description
                'Disciplines_ID' => $request->disciplines, // Provide appropriate level
                'Institution_ID' => $ins_address_id, // Provide appropriate institution
            ]);

            $qual_id = DB::getPdo()->lastInsertId();

            DB::table('certificates')->insert([
                'Qualification_ID' => $qual_id, // Set the appropriate qualification ID
                'Graduation_Year' => explode('-', $request->academic_year)[1], // Extract year from academic year
                'Maximum_Pass_Grade' => $request->max_pass_grade, // Assuming 100 is the max pass grade
                'Total_Grades' => $request->total_grades,
                'Percentage' => $request->percentage,
                'Issue_Date' => $request->certificate_date,
                'Seat_Number' => $request->seat_number,
            ]);

            $cer_id = DB::getPdo()->lastInsertId();

            DB::table('identities')->insert([
                'identity_types_id' => $request->id_type,
                'Number' => $request->id_number,
                'Issue_Date' => $request->issue_date,
                'Issuing_Authority' => $request->issue_location,
            ]);

            $identity_id = DB::getPdo()->lastInsertId();

            if($request->governorate == 'other'){
                DB::table('directorates')->insert([
                    'Name' => $request->directorate,
                ]);
                $reg_dir_id = DB::getPdo()->lastInsertId();
                DB::table('addresses')->insert([
                    'Directorate_ID' => $reg_dir_id,
                    'Neighborhood' => $request->neighborhood,
                    'Notes' => $request->address_notes,
                ]);
                $reg_address_id = DB::getPdo()->lastInsertId();
            }
            else{
                DB::table('addresses')->insert([
                    'Directorate_ID' => $request->directorate,
                    'Neighborhood' => $request->neighborhood,
                    'Notes' => $request->address_notes,
                ]);
                $reg_address_id = DB::getPdo()->lastInsertId();
            }

            DB::table('registrations')->insert([
                "NameAR" => $request->nameAR,
                "NameEN" => $request->nameEN,
                "Date" => now(),
                "Gender" => $request->gender,
                "Nationality" => $request->nationality,
                "DOB" => $request->date_of_birth,
                "Place_Of_Birth" => $request->place_of_birth,
                "Marital_ID" => $request->marital_status,
                "Blood_ID" => $request->blood_type,
                "Mobile_Phone_Number" => $request->mobile,
                "Landline_Number" => $request->lindline,
                "Major_ID" => $request->majors,
                "Identity_ID" => $identity_id,
                "Address_ID" => $reg_address_id,
                "Certificate_ID" => $cer_id,
            ]);

            $reg_id = DB::getPdo()->lastInsertId();

            if($request->guardian_governorate == 'other'){
                DB::table('directorates')->insert([
                    'Name' => $request->guardian_directorate,
                ]);
                $guard_dir_id = DB::getPdo()->lastInsertId();
                DB::table('addresses')->insert([
                    'Directorate_ID' => $request->guard_dir_id,
                ]);
                $guard_address_id = DB::getPdo()->lastInsertId();
            }
            else{
                DB::table('addresses')->insert([
                    'Directorate_ID' => $request->guardian_directorate,
                ]);
                $guard_address_id = DB::getPdo()->lastInsertId();
            }


            DB::table('guardians')->insert([
                'Registration_ID' => $reg_id, // Get last inserted ID for registration
                'Name' => $request->guardian_name,
                'Relationship' => $request->guardian_relationship,
                'Profession' => $request->guardian_occupation,
                'Workplace' => $request->guardian_workplace,
                'Phone_Number' => $request->guardian_phone,
                'Landline_Number' => $request->guardian_landline,
                'Address_ID' => $guard_address_id, // Set the appropriate address ID
            ]);

            if(isset($request->guardian_name2) && isset($request->guardian_relationship2) && isset($request->guardian_phone2) && isset($request->guardian_landline2)){
                DB::table('guardians')->insert([
                    'Registration_ID' => $reg_id, // Get last inserted ID for registration
                    'Name' => $request->guardian_name2,
                    'Relationship' => $request->guardian_relationship2,
                    'Phone_Number' => $request->guardian_phone2,
                    'Landline_Number' => $request->guardian_landline2,
                ]);
            }
            if(isset($request->guardian_name3) && isset($request->guardian_relationship3) && isset($request->guardian_phone3) && isset($request->guardian_landline3)){
                DB::table('guardians')->insert([
                    'Registration_ID' => $reg_id, // Get last inserted ID for registration
                    'Name' => $request->guardian_name3,
                    'Relationship' => $request->guardian_relationship3,
                    'Phone_Number' => $request->guardian_phone3,
                    'Landline_Number' => $request->guardian_landline3,
                ]);
            }

            DB::commit();

            CRUDBooster::insertLog("Registration ID:$reg_id Success ", $request->all());
            return response()->json(['message' => 'You have been registered', 'type' => 'success']);
        } catch (\Exception $e) {
            DB::rollBack();
            $message = $e->getMessage();
            CRUDBooster::insertLog("Registration failed", $message);
            return response()->json(['message' => $message, 'type' => 'error']);
        }
    }
}
