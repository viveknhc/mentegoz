<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial=Testimonial::all();
        return view('admin.testimonial.add_testimonial',compact('testimonial'));
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
        $data = new Testimonial;
      
        $data->name=$request->name;
        $data->description=$request->description;
        $data->designation=$request->designation;
        $data->rating=$request->rating;
        if($request->hasfile('image'))
    {
        $file=$request->file('image');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/testimonial_image',$filename);
        $data->image=$filename;    
    }
    else{
        $data->image='';
    }
         $data->priority=$request->priority;
         $data->save();
         return redirect('/testimonial');
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
        $data = Testimonial::findOrFail($id);
         return view('admin.testimonial.edit_testimonial',compact('data'));
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
        $data =Testimonial::findOrFail($id);
            if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/testimonial_image',$filename);
            $data->image=$filename;    
        }
           else{
           
           $data->image=$request->img_testimonial;
        }
      
        $data->name=$request->name;
        $data->description=$request->description;
        $data->designation=$request->designation;
        $data->rating=$request->rating;
           $data->priority=$request->priority;
            $data->save();
            return redirect('/testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Testimonial::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}
