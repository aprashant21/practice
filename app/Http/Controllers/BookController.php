<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('/books')->with('bookArr', Book::all() );

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
            $res = new Book;
            $res->title = $request->input('title');
            $res->firstname = $request->input('fname');
            $res->mainname = $request->input('sname');
            $res->price = $request->input('price');
            $res->numpages = $request->input('pages');
            $res->imagebook = $request->input('imgbook');

        $res->save();

        $request->session()->flash('msg','Data Saved!');
        return redirect ('/adminbook');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('/adminbook')->with('bookArr', Book::all() );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book,$id)
    {
         return view('book_edit')->with('bookArr', Book::find($id) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $res=Book::find($request->id);
        $res->title = $request->input('title');
        $res->firstname = $request->input('fname');
        $res->mainname = $request->input('sname');
        $res->price = $request->input('price');
        $res->numpages = $request->input('pages');
        $res->imagebook = $request->input('imgbook');

        $res->save();

        $request->session()->flash('msg','Data Updated');
        return redirect ('/adminbook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Book::destroy(array('id',$id));
        $request->session()->flash('msg','Data Deleted');
        return redirect ('/adminbook');
    }
}
