<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\WasteitemFormRequest;
use App\Models\Wasteitem;



class WasteitemController extends Controller
{
    public function index()
    {
        return view('admin.wasteitem.index');
    }
    public function create()
    {
        return view('admin.wasteitem.create');
    }
    public function store(Request $request)
    {

        $wasteitem = new Wasteitem();
 
        $wasteitem->item_name = $request->input('item_name');
        $wasteitem->points = $request->input('points');
        $wasteitem->save();
        return redirect('admin/wasteitem')->with('message','Waste Category added successfully');

        
    }
    public function edit( Wasteitem $wasteitem)
    {
        return view('admin.wasteitem.edit',compact('wasteitem'));
    }
    public function update(Request $request, $wasteitem)
    {
        $wasteitem = Wasteitem::findorFail($wasteitem);
        $wasteitem->item_name = $request->input('item_name');
        $wasteitem->points = $request->input('points');
        $wasteitem->update();
        return redirect('admin/wasteitem')->with('message','Waste Category updated successfully');
    }
}
