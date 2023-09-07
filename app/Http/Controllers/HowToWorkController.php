<?php

namespace App\Http\Controllers;

use App\Models\HowToWork;
use Illuminate\Http\Request;

class HowToWorkController extends Controller
{
    public function index(){
        return view('dashboard.HowItWork.index')->with('hows',HowToWork::orderby('order')->get());
    }
    public function edit($id){
        return view('dashboard.HowItWork.edit')->with('HowItWork',HowToWork::find($id));
    }
    public function update(Request $request,$id){
        $HowItWork = HowToWork::find($id);
        $HowItWork->title = $request->title;
        $HowItWork->body = $request->body;
        if($request->image != null){
            $HowItWork->image = $request->image->store('HowItWork');
        }
        $HowItWork->save();
        return redirect()->route('HowItWork.index')->with(['success'=>'تم التعديل بنجاح']);
    }
    public function reorder_HowItWork(Request $request){
        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));
            
            foreach($arr as $sortOrder => $id){
                $HowItWork = HowToWork::find($id);
                
                $HowItWork->order = $sortOrder;
                // $menu->save();
                $HowItWork->update(['order'=>$sortOrder]);
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }

}
