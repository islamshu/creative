<?php

namespace App\Http\Controllers;

use App\Models\ContactUS;
use Illuminate\Http\Request;

class ContactUSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.contactus.index')->with('contactus',ContactUS::orderby('id','desc')->get());
    }

    public function show( $id)
    {
        $contactUS = ContactUS::find($id);
        $contactUS->status = 1;
        $contactUS->save();
        return view('dashboard.contactus.show')->with('contact',$contactUS);
    }
    public function destroy( $id)
    {
        $contactUS = ContactUS::find($id);
        $contactUS->delete();
        return redirect()->back()->with(['success'=>'تم الحذف بنجاح']);

    }

    
}
