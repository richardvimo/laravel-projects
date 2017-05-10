<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Image;

class TeacherController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('teacher');
    }


    public function index() {
    	return view('admin.teacher.home');
    }


    public function profile(){
        return view('admin.teacher.profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $odlFilename = $user->photo;

            $user->photo = $filename;

            //eliminamos la anterior imagen del disco
            if ( strcmp($odlFilename, "default.jpg") !== 0 ) {
                unlink(public_path('/uploads/avatars/'.$odlFilename));    
            }
            
            $user->save();
        }

        return view('admin.teacher.profile', array('user' => Auth::user()) );

    }
}
