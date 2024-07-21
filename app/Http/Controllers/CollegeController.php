<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class CollegeController extends Controller
{

    public function __construct()
    {
        // Share colleges data with all views
        $colleges = College::all();
        View::share('colleges', $colleges);
    }

    public function show($id)
    {
        $college = College::with('majors')->findOrFail($id);
        return view('college.college', compact('college'));
    }
}
