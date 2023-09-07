<?php

namespace App\Http\Controllers;

use App\Models\ClientSection;
use Illuminate\Http\Request;

class ClientSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.clients.index')->with('clients',ClientSection::orderby('id','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new ClientSection();
        $client->image = $request->image->store('clients');
        
        $client->save();
        return redirect()->route('clients.index')->with(['success'=>'تم انشاء العميل بنجاح']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientSection $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientSection $client)
    {
        return view('dashboard.clients.edit')->with('client',$client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientSection $client)
    {
        if($request->image != null){
            $client->image = $request->image->store('clients');
        }
      
        $client->save();
        return redirect()->route('clients.index')->with(['success'=>'تم العميل المشروع بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientSection $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with(['success'=>'تم حذف العميل بنجاح']);

    }
}
