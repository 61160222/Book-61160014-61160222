<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total= DB::table('Orders')->get()->sum('Total');

       $order = DB::table('Orders')
        ->join('book','book.BookCode','=','orders.BookCodeO')
        ->join('member','member.Mem_ID','=','orders.Mem_ID')
        ->get();
        return view('order.index',compact('order'),compact('total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'Mem_ID'=>'required',
        //     'OrderNumber'=>'required',
        //     'BookCode'=>'BookCode',
        //     'BookName'=>'required',
        //     'BookPrice'=>'required',
        //     'OrderUint'=>'required'
        // ]);
        DB::table('Orders')->insert([
            'Mem_ID'=>$request->Mem_ID,
            'OrderNumber'=>$request->OrderNumber,
            'OrderUint'=>$request->OrderUint,
            'BookCodeO'=>$request->BookCodeO
        ]);
        return redirect('order');
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
        $order = DB::table('Orders')
        ->join('book','book.BookCode','=','orders.BookCodeO')
        ->where('OrderNumber','=',$id)
        ->get();

        return view('order.edit',compact('order'));
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
        // $request->validate([
        //     'Mem_ID'=>'required',
        //     'OrderNumber'=>'required',
        //     'BookCode'=>'BookCode',
        //     'BookName'=>'required',
        //     'BookPrice'=>'required',
        //     'OrderUint'=>'required'
        // ]);
        DB::table('Orders')->where('OrderNumber','=',$id)->update([
            'Mem_ID'=>$request->Mem_ID,
            'OrderNumber'=>$request->OrderNumber,
            'OrderUint'=>$request->OrderUint,
            'BookCodeO'=>$request->BookCodeO
        ]);
    
            return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Orders")->where('OrderNumber',"=",$id)->delete();
        return redirect('order');
    }


    

}