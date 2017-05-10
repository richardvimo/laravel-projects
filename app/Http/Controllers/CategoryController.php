<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Category;


class CategoryController extends Controller
{
    protected $categories;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $categories)
    {
        $this->middleware('auth:admin');
        $this->middleware('admin');

        $this->categories=$categories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = $this->categories->latest('created_at')->paginate(5);

        if ($request->ajax()) {
            return response()->json(view('admin.categories.index',compact('categories'))->render());  
        }
        return view('admin.home', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {

            $this->validate($request, array('name' => 'required|max:255'));

            $category = new Category;

            $category->name = $request->name;

            if ( $category->save() ) {
                $categories = Category::paginate(5);
                return response()->json([
                    'msg' => 'registro creado correctamente',
                    'view' => view('admin.categories.index', compact('categories'))->render()
                ]);
            }
            return view('admin.home', compact('categories'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ( $request->ajax() ) {
            return response()->json(Category::find($id));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
