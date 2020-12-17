<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    	return view('createuser');
    }
    public function view()
    {
    	$user=User::all();
    	return view('viewuser',compact('user'));
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'firstname'=>'required|min:3',
    		'lastname'=>'required|min:3',
    		'email' => 'required|email',
    		'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:14',
    		'city' => 'required',
			'gender'=> 'required|in:male,female',
			'status'=> 'required|in:1,0',
    		'image'=>'required|max:10000',
    		'status'=>'required',
    	]);
    	 $files = $request->file('image');
		 $user = new User; 
    	 $user->first_name=$request->firstname;
    	 $user->last_name=$request->lastname;
    	 $user->email=$request->email;
    	 $user->contact_no=$request->number;
    	 $user->city=$request->city;
    	 $user->gender=$request->gender;
    	 $user->status=$request->status;
    	$name=$files->getClientOriginalName(); 
    	$files->move('img',$name); 
    	 $user->photo=$name; 
    	 $user->save();
    	 return redirect()->route('view-user')->with('success','User created Successfully!');
    }
     public function delete($id)
    { 
        $banner=DB::table('users')->where('id',$id)->delete();
        return back()->with('success','Deleted Successfully!');
    }
    public function edit($id)
    {  
        $banner=User::where('id',$id)->first();
        return view('edituser',compact('banner'));
    }
    public function update(Request $request)
    {
        $id=request('id');
        User::where('id',$id)->update(['first_name'=>request('firstname'),'last_name'=>request('lastname'),'email'=>request('email'),'contact_no'=>request('number'),'city'=>request('city'),'status'=>request('status'),
            'gender'=>request('gender')]);
        return redirect()->route('admin.showcat')->with('success','Updated Successfully!');
    } 
}
