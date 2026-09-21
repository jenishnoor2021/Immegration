<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactshow = Contact::where('is_show',0)->get();
        foreach($contactshow as $conta)
        {
            $conta->is_show = 1;
            $conta->save();
        }
        $contacts = Contact::orderBy('id','DESC')->Paginate(10);
        return view('admin.contact.index',compact('contacts'));
        // return view('admin.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
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
        Contact::create($input);
        return redirect('admin/contact');
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
        $adslink = Contact::findOrFail($id);
        $adslink->delete();
        // return  Redirect::back(); 
        return redirect('admin/contact');
    }

    public function mycontactDeleteAll(Request $request)
    {
        $ids = $request->ids;
        if (empty($ids)) {
            return response()->json(['error' => 'Please select at least one record to delete.'], 400);
        }
        $idsArray = is_array($ids) ? $ids : explode(',', $ids);
        $idsArray = array_filter($idsArray);
        Contact::whereIn('id', $idsArray)->delete();
        return response()->json(['success' => 'Selected contacts deleted successfully.']);
    }
}
