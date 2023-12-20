<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use App\Models\ProjectTags;
use App\Models\ProjectGallery;
use App\Models\ProjectTechnology;
use App\Models\ProjectCategory;
use App\Models\Career;
use App\Models\Project;
use App\Models\Magazine;
use App\Models\TalentalkVideo;
use App\Models\News;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactmail;
use App\Models\Team;
use Session;
class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('web.index');
    }

    public function about()
    {
        return view('web.about');
    }
    public function talenmark()
    {
        return view('web.talenmark');
    }
    public function products()
    {
        return view('web.product');
    }
    public function blogs()
    {
        return view('web.blog-page');
    }
    public function innerblogs()
    {
        return view('web.blog-inner-page');
    }
    public function testimonials()
    {
        return view('web.testimonial');
    }
    public function client()
    {
        return view('web.clients');
    }
    public function services()
    {
        return view('web.services');
    }
    public function digital_marketing()
    {
        return view('web.digital-marketing');
    }
    public function web_design()
    {
        return view('web.web-design');
    }

    public function seo()
    {

        return view('web.seo-page');
    }

    public function talentalk_home()
    {
        $talenmagazine=Magazine::all();
        $talenvideo=TalentalkVideo::all();
        return view('web.talentalk_home',compact('talenmagazine','talenvideo'));
    }
    public function magazine($slug)
    {
        $magazine=DB::table('magazine')
        ->where('slug', '=',$slug)
        ->orderBy('id', 'desc')
        ->limit(1)
        ->get();
        return view('web.talentalk',compact('magazine'));
    }
    public function invest()
    {
        return view('web.invest');
    }
    public function news()
    {
        $news=News::orderBy('id', 'desc')->paginate(16);
        return view('web.newsandupdates',compact('news'));
    }
    public function news_slug($slug)
{
$news=DB::table('news')
->where('slug', '=',$slug)
->orderBy('id', 'desc')
->limit(1)
->get();
$latestnews=DB::table('news')
->where('slug', '!=',$slug)
->orderBy('date', 'desc')
->limit(2)
->get();
return view('web.news_inner',compact('news','latestnews'));
}

    public function team_details($slug)
    {
        $team=DB::table('team')
        ->where('slug', '=',$slug)
        ->orderBy('id', 'desc')
        ->limit(1)
        ->get();
        return view('web.team_details',compact('team'));
    }
    public function projects()
    {
        $project=Project::all();
        $category=DB::table('project_category')
        ->orderBy('priority', 'asc')
        ->get();
        return view('web.portfolio',compact('category','project'));
    }
    public function project_details($slug)
    {
        $project=DB::table('project')
        ->select('project.*','project_category.category as pcategory','project_category.slug as pslug') 
        ->join('project_category','project.project_category','=','project_category.id')
        ->where('project.slug', '=',$slug)
        ->get();
        $technology=ProjectTechnology::all();
        $current_technology =DB::table('project')
        ->select('project.technologies')
        ->where('project.slug', '=',$slug)
        ->get();
        $ctech= json_decode($current_technology[0]->technologies);
        $gallery=DB::table('project_gallery')
        ->select('project_gallery.*')
         ->join('project','project.id','=','project_gallery.project_id')
        ->where('project.slug', '=',$slug)
        ->orderBy('project_gallery.priority', 'asc')
        ->get();


        return view('web.portfolio-details',compact('project','gallery','technology','ctech'));
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function careers()
    {
        $careers=Career::all();
        return view('web.career',compact('careers'));
    }

    public function privacy()
    {
        return view('web.privacy');
    }
    public function termsandconditions()
    {
        return view('web.termsandconditions');
    }






    public function career()
    {
        $career=Career::orderBy('priority', 'asc')->get();
        return view('web.career',compact('career'));
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
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $remoteip = $_SERVER['REMOTE_ADDR'];
            $data = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->get('recaptcha'),
            'remoteip' => $remoteip
            ];
            $options = [
            'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
            ]
            ];
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $resultJson = json_decode($result);
            if ($resultJson->success != true) {
            $err=Session::flash('captcha', 'ReCaptcha Error');
            return back()->withErrors($err);
            }
            if ($resultJson->score >= 0.3) {
       $data = new Contact;
       $data->fname=$request->fname;
       $data->lname=$request->lname;
       $data->email=$request->email;
       $data->phone=$request->phone;
       $data->country=$request->country;
       $data->linkedin=$request->linkedin;
       $data->save();
            }
    //    $data=array(
    //     'name'    => $request->name,
    //     'email'  =>  $request->email,
    //     'phone'   =>  $request->phone,
    //     'subject'   =>  $request->subject,
    //     'message'   =>  $request->message,
        

        
    // );
  
    // Mail::to(env('APP_MAIL'),$data['name'],$data['email'],$data['phone'],$data['message'])->send(new contactmail($data));


    $msg=Session::flash('success', 'Successfully Submitted');
    return redirect()->back()->with($msg);
       
     
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    }

    
}
