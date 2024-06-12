<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\grade; // Import the Grade model
use Illuminate\Support\Facades\Log;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    try {
        $grades = Grade::all();

        if ($grades->isEmpty()) {
            return view('grades.show', ['message' => 'No grades found.']);
        }

        return view('grades.show', compact('grades'));
    } catch (\Exception $e) {
        Log::error('Error retrieving grades: ' . $e->getMessage());
        return view('grades.show', ['message' => 'An error occurred while retrieving the grades.']);
    }
}

    // Implement other CRUD methods as needed
}