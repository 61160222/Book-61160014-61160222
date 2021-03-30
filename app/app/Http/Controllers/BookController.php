<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $book = DB::table('Book')->get();
       return view('book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
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
            'BookCode'=>'required',
            'BookName'=>'required',
            'BookTypeCode'=>'required',
            'BookPrice'=>'required',
            'BookStock'=>'required',
            'BooktAuthor'=>'required',
            'BookNote'=>'required'
        ]);
        DB::table('Book')->insert([
            'BookCode'=>$request->BookCode,
            'BookName'=>$request->BookName,
            'BookTypeCode'=>$request->BookTypeCode,
            'BookPrice'=>$request->BookPrice,
            'BookStock'=>$request->BookStock,
            'BooktAuthor'=>$request->BooktAuthor,
            'BookNote'=>$request->BookNote
        ]);
        return redirect('book');
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
        $book = DB::table('Book')->where('BookCode','=',$id)->get();
        return view('book.edit',compact('book'));
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
            'BookCode'=>'required',
            'BookName'=>'required',
            'BookTypeCode'=>'required',
            'BookPrice'=>'required',
            'BookStock'=>'required',
            'BooktAuthor'=>'required',
            'BookNote'=>'required'

        ]);
        DB::table('Book')->where('BookCode','=',$id)->update([
            'BookCode'=>$request->BookCode,
            'BookName'=>$request->BookName,
            'BookTypeCode'=>$request->BookTypeCode,
            'BookPrice'=>$request->BookPrice,
            'BookStock'=>$request->BookStock,
            'BooktAuthor'=>$request->BooktAuthor,
            'BookNote'=>$request->BookNote

        ]);
            return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("Book")->where('BookCode',"=",$id)->delete();
        return redirect('book');
    }
}