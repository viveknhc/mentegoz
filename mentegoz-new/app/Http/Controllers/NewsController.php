<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::all();
        return view('admin.news.add_news',compact('news'));
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
        $data = new News;

        $data->title=$request->title;
        $data->news_type=$request->news_type;
        if($request->slug != '')
        {
        $data->slug=Str::slug($request->slug);
        }
        else{
        $data->slug=Str::slug($request->title);
        }
        $data->description=$request->description;
        if($request->hasfile('image'))
    {
        $file=$request->file('image');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/news_image',$filename);
        $data->image=$filename;    
    }
    else{
        $data->image='';
    }
         $data->date=$request->date;
         $data->save();
         return redirect('/adminnews');
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
        $data = News::findOrFail($id);
         return view('admin.news.edit_news',compact('data'));
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
        $data =News::findOrFail($id);
            if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/news_image',$filename);
            $data->image=$filename;    
        }
           else{
           
           $data->image=$request->img_news;
        }
      
        $data->title=$request->title;
        $data->news_type=$request->news_type;
        if($request->slug != '')
        {
        $data->slug=Str::slug($request->slug);
        }
        else{
        $data->slug=Str::slug($request->title);
        }
        $data->description=$request->description;
        $data->date=$request->date;
            $data->save();
            return redirect('/adminnews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=News::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}
