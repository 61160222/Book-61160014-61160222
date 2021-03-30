<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $shopping = DB::table('Member')->get();
       return view('shopping.index',compact('shopping'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shopping.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Mem_ID'=>'required'
        ]);
        DB::table('Shopping')->insert([
            'Mem_ID'=>$request->Mem_ID

        ]);
        return redirect('shopping');
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
        $shopping = DB::table('Shopping')->where('Mem_ID','=',$id)->get();
        return view('shopping.edit',compact('shopping'));
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
        $request->validate([
            'Mem_ID'=>'required'
        ]);
        DB::table('Shopping')->where('Mem_ID','=',$id)->update([
            'Mem_ID'=>$request->Mem_ID

        ]);
            return redirect('shopping');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Shopping")->where('Mem_ID',"=",$id)->delete();
        return redirect('shopping');
    }
}