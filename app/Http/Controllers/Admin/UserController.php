<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {

        $user = new User();
 
        $user->last_name = $request->input('last_name');
        $user->student_id = $request->input('student_id');
        $user->first_name = $request->input('first_name');
        $user->email = $request->input('email');
        $user->year = $request->input('year');
        $user->faculty = $request->input('faculty');
        $user->password = bcrypt($request->input('password'));
        
        $user->save();
        return redirect('admin/user')->with('message','User has been added successfully');

        
    }
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }
}
