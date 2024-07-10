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
use App\Models\identity;
use App\Models\major;

class RegistrationController extends Controller
{

    public function index()
    {
        // جلب كافة البيانات من الجداول المرتبطة
        $maritals = Marital::all();
        $bloods = Blood::all();
        $certificates = Certificate::all();
        $addresses = Address::all();
        $identities = Identity::all();
        $qualifications = Qualification::all();

        
    }

    public function create()
    {
        $maritalStatuses = Marital::pluck('Status', 'id');
        $bloodTypes = Blood::pluck('Type', 'id');
        $identityTypes = Identity::pluck('Type', 'id');

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
            'majorsAdministration', 
            'majorsLanguages', 
            'majorsSharia', 
            'majorsIslamicStudies',
            'majorsComputerScience'
        ));
    }
}
