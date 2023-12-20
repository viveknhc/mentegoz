<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Str;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team=Team::all();
        return view('admin.team.add_team',compact('team'));
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
        $data = new Team;
      
        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->overview=$request->overview;
        $data->slug=Str::slug($request->name);
        if($request->hasfile('image'))
    {
        $file=$request->file('image');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/team_image',$filename);
        $data->image=$filename;    
    }
    else{
        $data->image='';
    }
    if($request->hasfile('details_image'))
    {
        $file=$request->file('details_image');

        $extension=$file->getClientOriginalExtension();
        $filename='det'.time().'.'.$extension;
        $file->move('upload/team_image',$filename);
        $data->details_image=$filename;    
    }
    else{
        $data->details_image='';
    }
         $data->priority=$request->priority;
         $data->save();
         return redirect('/team');
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
        $data = Team::findOrFail($id);
         return view('admin.team.edit_team',compact('data'));
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
        $data =Team::findOrFail($id);
            if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/team_image',$filename);
            $data->image=$filename;    
        }
           else{
           
           $data->image=$request->img_team;
        }
        if($request->hasfile('details_image'))
    {
        $file=$request->file('details_image');

        $extension=$file->getClientOriginalExtension();
        $filename='det'.time().'.'.$extension;
        $file->move('upload/team_image',$filename);
        $data->details_image=$filename;    
    }
    else{
        $data->details_image=$request->img_detls_team;
    }
        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->overview=$request->overview;
        $data->priority=$request->priority;
        $data->slug=Str::slug($request->name);
            $data->save();
            return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Team::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}
