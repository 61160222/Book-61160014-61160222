<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $member = DB::table('Member')->get();
       return view('member.index',compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
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
            'Mem_ID'=>'required',
            'Username'=>'required',
            'Name'=>'required',
            'Address'=>'required',
            'BirthDate'=>'required',
            'Telphephon'=>'required',
            'Email'=>'required',
            'IDCard'=>'required'
        ]);
        DB::table('Member')->insert([
            'Mem_ID'=>$request->Mem_ID,
            'Username'=>$request->Username,
            'Name'=>$request->Name,
            'Address'=>$request->Address,
            'BirthDate'=>$request->BirthDate,
            'Telphephon'=>$request->Telphephon,
            'Email'=>$request->Email,
            'IDCard'=>$request->IDCard
        ]);
        return redirect('member');
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
        $member = DB::table('Member')->where('Mem_ID','=',$id)->get();
        return view('member.edit',compact('member'));
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
            'Mem_ID'=>'required',
            'Username'=>'required',
            'Name'=>'required',
            'Address'=>'required',
            'BirthDate'=>'required',
            'Telphephon'=>'required',
            'Email'=>'required',
            'IDCard'=>'required'
        ]);
        DB::table('Member')->where('Mem_ID','=',$id)->update([
            'Mem_ID'=>$request->Mem_ID,
            'Username'=>$request->Username,
            'Name'=>$request->Name,
            'Address'=>$request->Address,
            'BirthDate'=>$request->BirthDate,
            'Telphephon'=>$request->Telphephon,
            'Email'=>$request->Email,
            'IDCard'=>$request->IDCard
        ]);
            return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Member")->where('Mem_ID',"=",$id)->delete();
        return redirect('member');
    }
}