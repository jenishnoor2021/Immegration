<?php

namespace App\Http\Controllers;

use App\Models\VisaEnrollment;

class AdminVisaEnrollmentController extends Controller
{
  public function index()
  {
    $newEnrollments = VisaEnrollment::where('is_show', false)->get();
    foreach ($newEnrollments as $enrollment) {
      $enrollment->update(['is_show' => true]);
    }

    $enrollments = VisaEnrollment::orderByDesc('id')->paginate(10);

    return view('admin.visa-enrollment.index', compact('enrollments'));
  }

  public function destroy($id)
  {
    VisaEnrollment::findOrFail($id)->delete();

    return redirect()->route('admin.visa-enrollment')->with('message', 'Enrollment deleted successfully.');
  }
}
