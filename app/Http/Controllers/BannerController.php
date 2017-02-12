<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Http\Requests;
use Validator;
use App\Home;
use Image;
use Alert;
use Session;
use File;
class BannerController extends BaseController
{
    //
    public function index(){
		$banners = Home::all();
        return view('admin.banner.banner')->withBanners($banners);
    	
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Home;

        $banner->description = $request->desc;
        $banner->main_title = $request->title;
            
        if($request->hasFile('photo')){
            $img=$request->file('photo');
            $filename=time().'.'.$img->getClientOriginalExtension();
            $location=public_path('img/slider/'.$filename);
            Image::make($img)->resize('1226','521')->save($location);
            $banner->image_path = $filename;

        }

        $banner->save();

        Session::flash('success', 'The banner was successfully save!');
        return redirect()->route('banners.index');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $post = Post::find($id);
    //     return view('admin.banners.show')->withPost($post);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $banner = Home::find($id);
        // return the view and pass in the var we previously created
        return view('admin.banner.edit')->withBanner($banner);
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

      $banner = Home::find($id);
        
      $banner->description = $request->desc;
      $banner->main_title = $request->title;
       
        if($request->hasFile('photo')){

            File::delete(public_path('img/slider/'.$banner->image_path));
            $img=$request->file('photo');
            $filename=time().'.'.$img->getClientOriginalExtension();
            $location=public_path('img/slider/'.$filename);
            Image::make($img)->resize('1226','521')->save($location);
            $banner->image_path = $filename;

        }

        $banner->save();
        Session::flash('update', 'The banner was successfully save!');

      return redirect()->route('banners.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Home::find($id);

        File::delete(public_path('img/slider/'.$banner->image_path));
        $banner->delete();
        return redirect()->route('banners.index');
    }
}
