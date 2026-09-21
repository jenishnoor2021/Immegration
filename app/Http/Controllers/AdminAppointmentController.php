<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::orderBy('id', 'DESC')->Paginate(10);
        return view('admin.appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $input['country'] = $request->input('country');
        $input['service'] = $request->input('service');
        $input['name'] = $request->input('name');
        $input['email'] = $request->input('email');
        $input['phone'] = $request->input('phone');
        $input['s_date'] = $request->input('s_date');
        $input['time'] = $request->input('time');
        $input['address'] = $request->input('address');
        $input['message'] = $request->input('message');

        Appointment::create($input);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your appointment request has been submitted successfully.'
            ]);
        }

        return redirect()->back()->with('alert', 'Appointment request sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect('admin/appointment');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        if (empty($ids)) {
            return response()->json(['error' => 'Please select at least one record to delete.'], 400);
        }
        $idsArray = is_array($ids) ? $ids : explode(',', $ids);
        $idsArray = array_filter($idsArray);
        Appointment::whereIn('id', $idsArray)->delete();
        return response()->json(['success' => 'Selected appointments deleted successfully.']);
    }
}
