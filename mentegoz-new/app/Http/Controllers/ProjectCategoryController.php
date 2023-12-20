<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use Illuminate\Support\Str;
use DB;
class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('project_category as c1')
        ->select('c1.id', 'c1.parent_id', 'c1.category','c1.priority', 'c2.category as parent_category')
        ->leftJoin('project_category as c2', 'c1.parent_id', '=', 'c2.id')
        ->orderBy('c1.priority', 'asc')
        ->get();
    
       
        $parent_category=DB::table('project_category')
        ->where('parent_id', '=',0)
        ->orderBy('id', 'desc')
        ->get();
        return view('admin.projects.add_project_category',compact('categories','parent_category'));
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
        $data = new ProjectCategory;

        $data->category=$request->category;
        $data->priority=$request->priority;
        $data->parent_id=$request->parent_id;
        $data->slug=Str::slug($request->category);
      
         $data->save();
         return redirect('/project_category');
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
    public function edit()
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=ProjectCategory::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}
