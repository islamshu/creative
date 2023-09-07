<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.reviews.index')->with('reviews',Review::orderby('id','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $review = new Review();
        $review->name = $request->name;
        $review->image = $request->image->store('reviews');
        $review->job = $request->job;
        $review->body = $request->body;
        $review->save();
        return redirect()->route('reviews.index')->with(['success'=>'تم التقيم المشروع بنجاح']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('dashboard.reviews.edit')->with('review',$review);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $review->name = $request->name;
        if($request->image != null){
            $review->image = $request->image->store('reviews');
        }
        $review->job = $request->job;
        $review->body = $request->body;
        $review->save();
        $review->save();
        return redirect()->route('reviews.index')->with(['success'=>'تم تعديل التقيم بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with(['success'=>'تم حذف التقيم بنجاح']);

    }
}
