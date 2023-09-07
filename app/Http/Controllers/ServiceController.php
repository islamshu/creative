<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('dashboard.service.index')->with('services',Service::orderby('order')->get());
    }
    public function edit($id){
        return view('dashboard.service.edit')->with('service',Service::find($id));
    }
    public function update(Request $request,$id){
        $service = Service::find($id);
        $service->title = $request->title;
        if($request->image != null){
            $service->image = $request->image->store('service');
        }
        $service->save();
        return redirect()->route('services.index')->with(['success'=>'تم التعديل بنجاح']);
    }
    public function reorder_service(Request $request){
        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));
            
            foreach($arr as $sortOrder => $id){
                $service = Service::find($id);
                
                $service->order = $sortOrder;
                // $menu->save();
                $service->update(['order'=>$sortOrder]);
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }

}
