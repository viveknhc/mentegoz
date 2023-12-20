<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectTags;
use App\Models\ProjectGallery;
use App\Models\ProjectTechnology;
use Illuminate\Support\Str;
use DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project=Project::all();
        $project_category=ProjectCategory::all();
        $project_tags=ProjectTags::all();
        $technology=ProjectTechnology::all();
        return view('admin.projects.add_project',compact('project','project_category','project_tags','technology'));
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
      
        $data = new Project;

        $data->title=$request->title;
        $data->client=$request->client;
        $data->slug=Str::slug($request->title);
        $data->project_category=$request->project_category;
        // tags
        $tags = $request->tags;
        $json_data = array(
            "tags" => $tags
        );
        $json_tags = json_encode($json_data);

        // technologies
        $technologies = $request->technologies;
        $json_data1 = array(
            "technologies" => $technologies
        );
        $json_technologies = json_encode($json_data1);


        $data->tags=$json_tags;
        $data->technologies=$json_technologies;
        $data->link=$request->link;
        $data->location=$request->location;
        $data->industry=$request->industry;
        $data->scope=$request->scope;
        $data->meta_title=$request->meta_title;
        $data->meta_keywords=$request->meta_keywords;
        $data->meta_description=$request->meta_description;
        $data->description=$request->description;
        $data->priority=$request->priority;
        if($request->hasfile('light_logo'))
    {
        $file=$request->file('light_logo');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/project/lightlogo',$filename);
        $data->light_logo=$filename;    
    }
    else{
        $data->light_logo='';
    }
    if($request->hasfile('dark_logo'))
    {
        $file=$request->file('dark_logo');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/project/darklogo',$filename);
        $data->dark_logo=$filename;    
    }
    else{
        $data->dark_logo='';
    }
    if($request->hasfile('project_image'))
    {
        $file=$request->file('project_image');

        $extension=$file->getClientOriginalExtension();
        $filename='bnr'.time().'.'.$extension;
        $file->move('upload/project',$filename);
        $data->project_image=$filename;    
    }
    else{
        $data->project_image='';
    }
    if($request->hasfile('banner_image'))
    {
        $file=$request->file('banner_image');

        $extension=$file->getClientOriginalExtension();
        $filename='bnr'.time().'.'.$extension;
        $file->move('upload/project/banner',$filename);
        $data->banner_image=$filename;    
    }
    else{
        $data->banner_image='';
    }
      $data->save();
 
         return redirect('/project');
    }
    public function gallery_store(Request $request)
    {
      
        $data = new ProjectGallery;
        $data->title=$request->title;
        $data->project_id=$request->project_id;
        $data->alt_tag=$request->alt_tag;
        $data->priority=$request->priority;
        if($request->hasfile('image'))
    {
        $file=$request->file('image');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/project_image/gallery',$filename);
        $data->image=$filename;    
    }
    else{
        $data->image='';
    }
    
      $data->save();
 
         return redirect('/project_gallery/'.$request->project_id);
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
        $data = Project::findOrFail($id);
        $current_cat =DB::table('project')
        ->select('project_category.*')
        ->join('project_category','project.project_category','=','project_category.id')
        ->where('project.id', '=',$id)
        ->get();
        $project_tags=ProjectTags::all();
        $current_tags =DB::table('project')
        ->select('project.tags')
        ->where('project.id', '=',$id)
        ->get();
        $ctags= json_decode($current_tags[0]->tags);
        $technology=ProjectTechnology::all();
        $current_technology =DB::table('project')
        ->select('project.technologies')
        ->where('project.id', '=',$id)
        ->get();
        $ctech= json_decode($current_technology[0]->technologies);
        $project_category=ProjectCategory::all();
         return view('admin.projects.edit_project',compact('data','project_category','current_cat','ctags','project_tags','technology','ctech'));
    }
    public function gallery($id)
    {
         $gallery=ProjectGallery::where('project_id', $id)->get();
         return view('admin.projects.project_gallery',compact('gallery'));
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
        $data =Project::findOrFail($id);
        $data->title=$request->title;
        $data->client=$request->client;
        $data->slug=Str::slug($request->title);
        $data->project_category=$request->project_category;
        // tags
        $tags = $request->tags;
        $json_data = array(
            "tags" => $tags
        );
        $json_tags = json_encode($json_data);

        // technologies
        $technologies = $request->technologies;
        $json_data1 = array(
            "technologies" => $technologies
        );
        $json_technologies = json_encode($json_data1);


        $data->tags=$json_tags;
        $data->technologies=$json_technologies;
        $data->link=$request->link;
        $data->location=$request->location;
        $data->industry=$request->industry;
        $data->scope=$request->scope;
        $data->meta_title=$request->meta_title;
        $data->meta_keywords=$request->meta_keywords;
        $data->meta_description=$request->meta_description;
        $data->description=$request->description;
        $data->priority=$request->priority;
        if($request->hasfile('light_logo'))
    {
        $file=$request->file('light_logo');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/project/lightlogo',$filename);
        $data->light_logo=$filename;    
    }
    else{
        $data->light_logo=$request->img_light_logo;
    }
    if($request->hasfile('dark_logo'))
    {
        $file=$request->file('dark_logo');

        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/project/darklogo',$filename);
        $data->dark_logo=$filename;    
    }
    else{
        $data->dark_logo=$request->img_dark_logo;
    }
    if($request->hasfile('project_image'))
    {
        $file=$request->file('project_image');

        $extension=$file->getClientOriginalExtension();
        $filename='bnr'.time().'.'.$extension;
        $file->move('upload/project',$filename);
        $data->project_image=$filename;    
    }
    else{
        $data->project_image=$request->img_project_image;
    }
    if($request->hasfile('banner_image'))
    {
        $file=$request->file('banner_image');

        $extension=$file->getClientOriginalExtension();
        $filename='bnr'.time().'.'.$extension;
        $file->move('upload/project/banner',$filename);
        $data->banner_image=$filename;    
    }
    else{
        $data->banner_image=$request->img_banner_image;
    }
      $data->save();
 
         return redirect('/project');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Project::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
    public function gallery_destroy($id)
    {
        $del=ProjectGallery::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}
