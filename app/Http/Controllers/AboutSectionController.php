<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function index()
    {
        return view('dashboard.about.index')->with('item', AboutSection::first());
    }
    public function store(Request $request)
    {
        $about = AboutSection::firstOrNew(['id' => 1]);
        $about->title = $request->title;
        $about->body = $request->body;
        if($request->image != null){
            $about->image = $request->image->store('about_section');
        }
        $about->save();
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);
    }


}
