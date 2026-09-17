<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::orderBy('sort_order', 'asc')->paginate(25);
        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'file' => 'required',
            'occupation' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'linkdin' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }

        $input = $request->all();
        $input['sort_order'] = Team::max('sort_order') + 1;
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('testimg', $name);

            $input['file'] = "$name";
        }

        Team::create($input);
        return redirect('/admin/team');
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
        $team = Team::findOrFail($id);
        $view_data = [
            'header' => [
                'title' => 'Testomonial Edit',
            ],
            'body' => [
                'id' => '',
                'team' => $team,
            ],
            'footer' => [
                'js' => [],
            ]
        ];

        return view('admin.team.edit', $view_data);
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
            'occupation' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'linkdin' => 'required',
        ]);

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator);
        }

        $push = Team::findOrFail($id);

        $input = $request->all();
        unset($input['sort_order']);

        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('testimg', $name);

            $input['file'] = "$name";

            if ($push->file == "/testimg/") {
            } else {
                if (file_exists(public_path() . $push->file)) {
                    unlink(public_path() . $push->file);
                }
            }
        }

        $push->update($input);

        return  redirect('/admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $backimg = Team::findOrFail($id);
        if ($backimg->file == '/testimg/') {
        } else {
            if (file_exists(public_path() . $backimg->file)) {
                unlink(public_path() . $backimg->file);
            }
        }
        $backimg->delete();

        return  Redirect::back();
    }

    public function statusUpdate(Request $request, $id)
    {
        $token = Team::findOrFail($id);
        $tokenstatus = $token->is_show;
        if ($tokenstatus == 0) {
            $token->is_show = 1;
        } else {
            $token->is_show = 0;
        }
        $token->save();
        return Redirect::back();
    }
    
    public function reorder(Request $request)
    {
        $order = $request->input('order');
        if (!is_array($order)) {
            return response()->json(['status' => 'error', 'message' => 'Invalid order data'], 400);
        }

        foreach ($order as $position => $id) {
            Team::where('id', $id)->update(['sort_order' => $position + 1]);
        }

        return response()->json(['status' => 'success']);
    }
}
