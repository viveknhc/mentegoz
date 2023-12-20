<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career=Career::all();
        return view('admin.career.add_career',compact('career'));
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
        $data = new Career;
      
        $data->title=$request->title;
        $data->description=$request->description;
        $data->qualification=$request->qualification;
        $data->vacancies=$request->vacancies;
        $data->location=$request->location;
        $data->experience=$request->experience;
         $data->priority=$request->priority;
         $data->save();
         return redirect('/admincareer');
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
        $data = Career::findOrFail($id);
         return view('admin.career.edit_career',compact('data'));
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
        $data =Career::findOrFail($id);
       
      
           $data->title=$request->title;
           $data->description=$request->description;
           $data->qualification=$request->qualification;
           $data->experience=$request->experience;
           $data->vacancies=$request->vacancies;
           $data->location=$request->location;
           $data->priority=$request->priority;
           $data->save();
           return redirect('/admincareer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Career::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}
