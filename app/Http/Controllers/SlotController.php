<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slots = DB::table('slot')->get();
        return view('slots/index',compact('slots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slots/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        DB::table('slot')->insert([
            'slot_name'=>$request->slot_name,
            'slot_active'=>$request->slot_active,
            'availability_status'=>$request->slot_active,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        // echo "$slot";
        // dd($slot);
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
       return "show";
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
        $slots=DB::table('slot')->find($id);
        // dd($category);
        return view('slots/edit',compact('slots'));
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
        DB::table('slot')->where('id',$id)->update([
            'slot_name'=>$request->slot_name,
            'slot_active'=>$request->slot_active,
            // 'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect("/slot");
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
