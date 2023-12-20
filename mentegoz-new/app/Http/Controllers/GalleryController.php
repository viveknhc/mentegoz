<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=Gallery::all();
        return view('admin.gallery.add_gallery',compact('gallery'));
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
        $data = new Gallery;
      
        $data->title=$request->title;
        if($request->hasfile('image'))
    {
        $file=$request->file('image');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/gallery_image',$filename);
        $data->image=$filename;    
    }
    else{
        $data->image='';
    }
         $data->priority=$request->priority;
         $data->save();
         return redirect('/admingallery');
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
        $data = Gallery::findOrFail($id);
         return view('admin.gallery.edit_gallery',compact('data'));
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
        $data =Gallery::findOrFail($id);
            if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/gallery_image',$filename);
            $data->image=$filename;    
        }
           else{
           
           $data->image=$request->img_gallery;
        }
      
           $data->title=$request->title;
           $data->priority=$request->priority;
            $data->save();
            return redirect('/admingallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Gallery::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}
