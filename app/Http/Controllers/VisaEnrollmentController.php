<?php

namespace App\Http\Controllers;

use App\Models\VisaEnrollment;
use Illuminate\Http\Request;

class VisaEnrollmentController extends Controller
{
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email', 'max:255'],
      'phone' => ['required', 'string', 'max:30'],
      'country' => ['required', 'string', 'max:100'],
      'course' => ['required', 'string', 'max:255'],
      'course_date' => ['required', 'date'],
      'batch' => ['required', 'in:morning,afternoon,evening'],
    ]);

    VisaEnrollment::create($validated);

    return redirect()->back()->with('enrollment_success', 'Your enrollment form was submitted successfully.');
  }
}
