<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Rate;
use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = Rate::all();
        // dump($rates);
        return view('rates.index',compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_all = DB::table('categories')->get();
        // dump($category_all);
        return view('rates.create',compact('category_all'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request);
        $rate = new Rate;
        $rate->rate_name =$request->rate_name;
        $rate->category_id =$request->category_name;
        $rate->type =$request->type;
        $rate->rate =$request->rate;
        $rate->rate_status =$request->rate_status;
        $rate->save();
        return redirect('/rate');
        

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
        // $category=DB::table('category')->find($id); 
        $rates = Rate::all()->find($id);
        $category_all = Category::all();
        // dump($category_all);
        return view('rates.edit',compact('rates','category_all'));
        
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
        $rate = Rate::find($id);
        $rate->rate_name =$request->rate_name;
        $rate->category_id =$request->category_name;
        $rate->type =$request->type;
        $rate->rate =$request->rate;
        $rate->rate_status =$request->rate_status;
        $rate->save();
        return redirect('/rate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rate = Rate::where('id',$id)->delete();
        return redirect('/rate');
    }
}
