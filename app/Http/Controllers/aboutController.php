<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\aboutu;
use Image;
use Alert;
use Session;

class aboutController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function about(){
         $ser=DB::table('projects')->get();
    	 return view('public.about',compact('ser'));
    }


    public function index(){
		//$about = aboutus::all();
	     $about=DB::table('aboutus')->get();
        //return view('admin.aboutus.aboutus')->withabouts($about);
         return view('admin.aboutus.aboutus',compact('about'));

    	
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
         $this->validate($request, array(
                'title'         => 'required|max:1200',
                'desc'          => 'required|alpha_dash|min:5|max:1200',
                'photo'         => 'required'
            ));

        // store in the database
        $about = new aboutu;

        $about->desc = $request->desc;
        $about->ourhistory = $request->title;
            
        if($request->hasFile('photo')){
            $img=$request->file('photo');
            $filename=time().'.'.$img->getClientOriginalExtension();
            $location=public_path('img/slider/'.$filename);
            Image::make($img)->resize('1226','521')->save($location);
            $about->photo = $filename;

        }

        $about->save();

        Session::flash('success', 'The About Us information was successfully save!');
        //return redirect('/admin/aboutus');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
   // {
     //   $post = Post::find($id);
     //   return view('admin.banners.show')->withPost($post);
   // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(aboutu $aboutus)
    {
     
        return view('/admin/aboutus/edit',compact('aboutus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aboutu $aboutus)
    {
        // Validate the data
        $this->validate($request, array(
                'title' => 'required|max:1200',
                'desc' => 'required|max:1200',
                'photo'  => 'required'
            ));
        $aboutu ->update($request ->all());
        
        
        

        // Save the data to the database
           

        // set flash data with success message
        Session::flash('success', 'This post was successfully saved.');

        // redirect with flash data to posts.show
        return redirect('/admin/aboutus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	//aboutus $aboutus
        
        $aboutus = aboutu::find($id);
        $aboutus->delete();
        Session::flash('success', 'The post was successfully deleted.');
        return redirect('/admin/aboutus');
    }




}
