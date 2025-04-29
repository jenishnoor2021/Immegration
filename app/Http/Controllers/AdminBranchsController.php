<?php

namespace App\Http\Controllers;

use App\Models\branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

class AdminBranchsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch = branch::orderBy('id', 'DESC')->paginate(10);
        return view('admin.branch.index', compact('branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'country' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }

        $input = $request->all();

        branch::create($input);
        return redirect('/admin/branch');
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
        $branch = branch::findOrFail($id);
        $view_data = [
            'header' => [
                'title' => 'Branch Edit',
            ],
            'body' => [
                'id' => '',
                'branch' => $branch,
            ],
            'footer' => [
                'js' => [],
            ]
        ];

        return view('admin.branch.edit', $view_data);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'country' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }

        $push = branch::findOrFail($id);

        $input = $request->all();

        $push->update($input);

        return  redirect('/admin/branch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $backimg = branch::findOrFail($id);
        $backimg->delete();

        return  Redirect::back();
    }

    public function statusUpdate(Request $request, $id)
    {
        $token = branch::findOrFail($id);
        $tokenstatus = $token->is_approved;
        if ($tokenstatus == 0) {
            $token->is_approved = 1;
        } else {
            $token->is_approved = 0;
        }
        $token->save();
        return Redirect::back();
    }
}
