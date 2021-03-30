<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $orderdetail = DB::table('OrderDetail')
       ->join('Orders','orderdetail.OrderNumber','=','Orders.OrderNumber')
       ->join('Member','orders.Mem_ID','=','Member.Mem_ID')
        ->get();
       return view('orderdetail.index',compact('orderdetail'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orderdetail.create');
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
        //     'OrderNumber'=>'required',
        //     'TUnit'=>'required',
        //     'TPrice'=>'required',
        //     'DateOrder'=>'required',
            //  'OrderNumber'=>'required'
        // ]);
        DB::table('OrderDetail')->insert([
            // 'Mem_ID'=>$request->Mem_ID
            'OrderNumber'=>$request->OrderNumber,
            'Delivered'=>$request->Delivered

        ]);
        return redirect('orderdetail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //     $orderdetail = DB::table('OrderDetail')
    //     ->join('Orders','orders.OrderNumber','=','orderdetail.OrderNumber')
    //     ->join('Book','book.BookCode','=','orderdetail.BookCode')
    //     ->join('Member','member.Mem_ID','=','orderdetail.Mem_ID')
    //     ->where('OrderDetail.OrderNumber',"=",$id)
    //     ->get();
    //    return view('orderdetail.show',compact('orderdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = DB::table('OrderDetail')->where('OrderNumber','=',$id)->get();
        return view('orderdetail.edit',compact('orderdetail'));
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
        //     'OrderNumber'=>'required',
        //     'TUnit'=>'required',
        //     'TPrice'=>'required',
        //     'DateOrder'=>'required',
        // ]);
        DB::table('OrderDetail')->where('OrderNumber','=',$id)->update([
            'Mem_ID'=>$request->Mem_ID,
            'OrderNumber'=>$request->OrderNumber,
            'Delivered'=>$request->Delivered
        ]);
            return redirect('orderdetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("OrderDetail")->where('OrderNumber',"=",$id)->delete();
        return redirect('orderdetail');
    }

    public function INDelivered(Request $request)
    {  
        DB::Statement('call INDelivered(?)',array($request->OrderNumber));             
        return redirect('orderdetail');
    }

}