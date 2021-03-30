<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $booktype = DB::table('BookType')->get();
       return view('booktype.index',compact('booktype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booktype.create');
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
            'BookTypeCode'=>'required',
            'BookTypeName'=>'required',
            'Rate'=>'required'
        ]);
        DB::table('BookType')->insert([
            'BookTypeCode'=>$request->BookTypeCode,
            'BookTypeName'=>$request->BookTypeName,
            'Rate'=>$request->Rate
        ]);
        return redirect('booktype');
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
        $booktype = DB::table('BookType')->where('BookTypeCode','=',$id)->get();
        return view('booktype.edit',compact('booktype'));
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
            'BookTypeCode'=>'required',
            'BookTypeName'=>'required',
            'Rate'=>'required'
        ]);
        DB::table('BookType')->where('BookTypeCode','=',$id)->update([
            'BookTypeCode'=>$request->BookTypeCode,
            'BookTypeName'=>$request->BookTypeName,
            'Rate'=>$request->Rate
        ]);
            return redirect('booktype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("BookType")->where('BookTypeCode',"=",$id)->delete();
        return redirect('booktype');
    }
    public function CheckRate(Request $request)
    {  
        DB::Statement('call CheckRate(?)',array($request->BookTypeCode));             
        return redirect('booktype');
    }
    
}