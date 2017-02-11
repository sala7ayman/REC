<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class indexController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function index(){
         $ser=DB::table('projects')->get();
    	 return view('index',compact('ser'));
    }

   // public function master(){
       //   $ser=DB::table('services')->get();
    //	 return view('master',compact('ser'));
    //}
}
