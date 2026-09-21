<?php

namespace App\Http\Controllers;

use App\Models\VisaEnrollment;
use Illuminate\Http\Request;

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

  public function deleteAll(Request $request)
  {
    $ids = $request->ids;
    if (empty($ids)) {
      return response()->json(['error' => 'Please select at least one record to delete.'], 400);
    }
    $idsArray = is_array($ids) ? $ids : explode(',', $ids);
    $idsArray = array_filter($idsArray);
    VisaEnrollment::whereIn('id', $idsArray)->delete();
    return response()->json(['success' => 'Selected visa enrollments deleted successfully.']);
  }
}
