<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $res = new Cd;
        $res->title = $request->input('title');
        $res->firstname = $request->input('fname');
        $res->mainname = $request->input('sname');
        $res->price = $request->input('price');
        $res->playlength = $request->input('playlength');
        $res->save();

        $request->session()->flash('msg','Data Saved!');
        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function show(Cd $cd)
    {
        return view('/admincd')->with('cdArr', Cd::all() );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function edit(Cd $cd, $id)
    {
        return view('cd_edit')->with('cdArr', Cd::find($id) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cd $cd)
    {
        $res=Cd::find($request->id);
        $res->title = $request->input('title');
        $res->firstname = $request->input('fname');
        $res->mainname = $request->input('sname');
        $res->price = $request->input('price');
        $res->playlength = $request->input('playlength');
        $res->save();

        $request->session()->flash('msg','Data Updated');
        return redirect ('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Cd::destroy(array('id',$id));
        $request->session()->flash('msg','Data Deleted');
        return redirect ('/admincd');
    }
}
