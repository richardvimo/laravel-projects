<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Image;
use App\Category;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::paginate(5);

        if ($request->ajax()) {
            return response()->json(view('admin.categories.index',compact('categories'))->render());
        }
        return view('admin.home', compact('categories'));

    }




    public function defaultHome() {
        return view('admin/defaulthome');
    }
    public function profileDefault(){
        return view('admin.profiledefault', array('user' => Auth::user()));
    }
    public function update_avatar_profiledefault(Request $request){

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

        return view('admin.profiledefault', array('user' => Auth::user()) );

    }





    public function profile(){
        return view('admin.profile', array('user' => Auth::user()));
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

        return view('admin.profile', array('user' => Auth::user()) );

    }
}
