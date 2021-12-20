<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_all = DB::table('category')->get();
        return view('category/index',compact('category_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request);
        // return $request->category_name;
        // return $request->category_active;
        // $category = new Category();
        // $category->category_name =  $request->category_name;
        // $category->category_active =  $request->category_active;
        // $category->save();
        // return redirect()->back();
        // dd($request);
        DB::table('category')->insert([
            'category_name'=>$request->category_name,
            'category_active'=>$request->category_active,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return "Hello";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $category=DB::table('category')->where('id',$id)->get();
        $category=DB::table('category')->find($id);
        // dd($category);
        return view('category/edit',compact('category'));

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
        // dd($request);
        DB::table('category')->where('id',$id)->update([
            'category_name'=>$request->category_name,
            'category_active'=>$request->category_active,
            // 'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect("/category");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Delete";
    }
}
