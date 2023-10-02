<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School_year; // Corrected the import statement

class SchoolYearController extends Controller
{
    private $schoolYear; // Renamed the variable to follow naming conventions

    public function __construct()
    {
        $this->schoolYear = new School_year(); // Corrected the instantiation
    }

    public function index()
    {
        // Use $this->schoolYear to access the model's methods
        $schoolYears = $this->schoolYear->show(); // Assuming you want to retrieve all school years
        return view('Management.SchoolYear.schoolyear', compact('schoolYears'));
    }

    public function create()
    {
        // Show a form to create a new school year (if needed)

    }

    public function store(Request $request)
    {
        // Store a new school year in the database (if needed)
        
    }

    public function show(string $id)
    {
        // Show a specific school year based on the provided ID
        // Example: $schoolYear = $this->schoolYear->find($id);

        // Return the view with the specific school year data
        // Example: return view('Management.SchoolYear.show', compact('schoolYear'));
    }

    public function edit(string $id)
    {
        // Show a form to edit a specific school year based on the provided ID
    }

    public function update(Request $request, string $id)
    {
        // Update a specific school year in the database based on the provided ID
    }

    public function destroy(string $id)
    {
        // Delete a specific school year from the database based on the provided ID
    }
}
