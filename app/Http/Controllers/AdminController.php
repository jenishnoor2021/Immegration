<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Contact;
use App\Models\Enquirey;
use App\Models\quatation;
use App\Models\Testomonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{


    function login(Request $req)
    {
        // return $req->input();
        $user = User::where(['username' => $req->username])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect()->back()->with('alert', 'Username or password is not matched');
            // return "Username or password is not matched";
        } else {
            Auth::loginUsingId($user->id);
            $req->session()->put('user', $user);
            return redirect('/admin/dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        $testomonial = Testomonial::count();
        $contact = Contact::count();
        $enauiry = Enquirey::count();
        $teams = Team::count();
        return view('admin.index', compact('contact', 'enauiry', 'teams', 'testomonial'));


        return view('admin.index');
    }

    public function profiledit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile.edit', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        // $user = User::where('id',1)->first();
        // $user->password = Hash::make($request->new_password);
        // $user->save();
        // return redirect()->back()->with("success","Password changed successfully !");
        // return $request;
        $user = Session::get('user');
        if (!(Hash::check($request->get('current-password'), $user->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Session::get('user');
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");
    }

    public function homePage(Request $request)
    {
        return view('frontend.index');
    }

    public function aboutUs(Request $request)
    {
        return view('frontend.about');
    }

    public function contactUs(Request $request)
    {
        return view('frontend.contact');
    }


    public function countryList(Request $request)
    {
        return view('frontend.country_list');
    }
    public function countryDetails(Request $request)
    {
        return view('frontend.country_details');
    }
    public function case(Request $request)
    {
        return view('frontend.case');
    }
    public function caseDetails(Request $request)
    {
        return view('frontend.case_details');
    }
    public function team(Request $request)
    {
        return view('frontend.team');
    }

    public function appointments(Request $request)
    {
        return view('frontend.appointments');
    }

    public function workProcess(Request $request)
    {
        return view('frontend.work_process');
    }

    public function visaList(Request $request)
    {
        return view('frontend.visa_list');
    }

    public function touristVisa(Request $request)
    {
        return view('frontend.tourist_visa');
    }

    public function services(Request $request)
    {
        return view('frontend.services');
    }

    public function storeInquiry(Request $request)
    {
        $input = $request->all();

        // if (isset($input['email'])) {
        //     \Mail::send('emails.quatation', $input, function ($message) use ($input) {
        //         $message->from('jenish.noor2021@gmail.com', 'sevencountries')->to($input['email'])->subject('response');
        //     });
        // }

        Enquirey::create($input);
        return redirect()->back()->with('alert', 'Enquiry send Successfully');
    }

    public function storeContact(Request $request)
    {
        $input = $request->all();

        // \Mail::send('emails.quatation', $input, function ($message) use ($input) {
        //     $message->from('jenish.noor2021@gmail.com', 'sevencountries')->to($input['email'])->subject('response');
        // });

        Contact::create($input);
        // return redirect()->back();
        return redirect()->back()->with('alert', 'Messange send Successfully');
    }


    public function storeQuatation(Request $request)
    {
        $input = $request->all();
        quatation::create($input);
        // return redirect()->back();
        return redirect()->back()->with('alert', 'Product Quotation request send Successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {}

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
    public function edit($id) {}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {}
}
