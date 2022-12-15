<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RewardFormRequest;
use App\Models\Reward;
use Illuminate\Support\Facades\File;

class RewardController extends Controller
{
    public function index()
    {
        return view('admin.reward.index');
    }
    public function create()
    {
        return view('admin.reward.create');
    }
    
    public function store(Request $request)
    {
       
        $reward = new Reward();
        if($request->hasFile('reward_image')){
            $file = $request->file('reward_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/rewards/',$filename);
            $reward->reward_image = $filename;
        }
        
 
        $reward->reward_name = $request->input('reward_name');
        $reward->points = $request->input('points');
        $reward->save();
        return redirect('admin/reward')->with('message','Reward added successfully');

  return redirect('admin/reward')->with('message','Reward added successfully');
    }

    public function edit(Reward $reward)
    {
        return view('admin.reward.edit',compact('reward'));
    }
    public function update(Request $request, $reward)
    {
       
        if($request->hasFile('reward_image')){
            $file = $request->file('reward_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/rewards/',$filename);
         //   $reward->reward_image = $filename;
        }
        $reward = Reward::findorFail($reward);
        $reward->reward_name = $request->input('reward_name');
        $reward->points = $request->input('points');
        $reward->update();
        return redirect('admin/reward')->with('message','Reward updated successfully');
    }
}
