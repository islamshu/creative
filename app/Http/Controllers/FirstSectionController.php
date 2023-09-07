<?php

namespace App\Http\Controllers;

use App\Models\FirstSection;
use Illuminate\Http\Request;

class FirstSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.first.index')->with('item', FirstSection::first());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $first = FirstSection::firstOrNew(['id' => 1]);
        $first->title_move = $request->title_move;
        $first->body = $request->body;
        $first->small_body = $request->small_body;
        $first->url = $request->url;
        $first->button_text = $request->button_text;
        if($request->image != null){
            $first->image = $request->image->store('first_section');
        }
        $first->save();
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);

    }

    /**
     * Display the specified resource.
     */
    public function show(FirstSection $firstSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FirstSection $firstSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FirstSection $firstSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FirstSection $firstSection)
    {
        //
    }
}
