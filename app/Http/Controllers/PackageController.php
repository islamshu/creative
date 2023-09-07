<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.packages.index')->with('packages',Package::orderby('id','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $package = new Package();
        $package->title = $request->title;
        $package->image = $request->image->store('packages');
        $package->price = $request->price;
        $package->body = $request->body;
        $package->save();
        return redirect()->route('packages.index')->with(['success'=>'تم الباقة المشروع بنجاح']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('dashboard.packages.edit')->with('package',$package);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $package->title = $request->title;
        if($request->image != null){
            $package->image = $request->image->store('packages');
        }
        $package->price = $request->price;
        $package->body = $request->body;
        $package->save();
        $package->save();
        return redirect()->route('packages.index')->with(['success'=>'تم تعديل الباقة بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with(['success'=>'تم حذف الباقة بنجاح']);

    }
}
