<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\ClientSection;
use App\Models\ContactUS;
use App\Models\FirstSection;
use App\Models\GeneralInfo;
use App\Models\HowToWork;
use App\Models\Package;
use App\Models\Project;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use Auth;
use Validator;
class HomeController extends Controller
{
    public function home(){
        $first = FirstSection::first();
        $services = Service::orderby('order')->get();
        $about = AboutSection::first();
        $hows = HowToWork::orderby('order')->get();
        $packges = Package::orderby('id','desc')->get();
        $clients = ClientSection::orderby('id','desc')->get();
        $reviews = Review::orderby('id','desc')->get();

        return view('layouts.frontend')
        ->with('first',$first)
        ->with('services',$services)
        ->with('about',$about)
        ->with('hows',$hows)
        ->with('packges',$packges)
        ->with('clients',$clients)
        ->with('reviews',$reviews)

        ;
    }
    public function retrurn_projects(Request $request){
        $projects = Project::where('section',$request->section)->orderby('id','desc')->take(3)->get();
        if($request->section == null){
            $projects = Project::where('section','مواقع الكترونية')->orderby('id','desc')->take(3)->get();

        }
        return view('frontend._my_work_project')->with('projects',$projects);
    }
    
    public function dashboard(){
        return view('dashboard.index');
    }

public function contact_us(Request $request)
{
    // Validation rules for the form fields
    $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'title' => 'required|string',
        'section' => 'required',
        'body' => 'required|string',
    ];

    

    // Validate the form data
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()->first()], 400);
    }
    $contact =  ContactUS::create($request->all());
    

    // Process the form data and send an email if needed
    // Replace this with your actual logic

    return response()->json(['message' => 'Form submitted successfully!'], 200);
}

    
    public function get_login(){
        return view('dashboard.auth.login');
    }
    public function post_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with(['error' => 'The data does not match our records'])->withInput($request->input());
        }
    }
    public function edit_profile()
    {
        return view('dashboard.auth.profile')->with('user', auth()->user());
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        if ($request->password != null) {
            $request->validate([
                'password' => 'required',
                'confirm-password' => 'same:password'
            ]);
        }
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
    }
    public function get_setting()
    {
        return view('dashboard.setting');
    }
    public function social()
    {
        return view('dashboard.social');
    }

    
    public function get_setting_post(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('general_file')) {
            foreach ($request->file('general_file') as $name => $value) {
                if ($value == null) {
                    continue;
                }
                GeneralInfo::setValue($name, $value->store('general'));
            }
        }

        foreach ($request->input('general') as $name => $value) {
            if ($value == null) {
                GeneralInfo::setValue($name, $value);
            }
            GeneralInfo::setValue($name, $value);
        }

        return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
    }
}
