<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class servicesController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function services(){

    	 return view('public.services');
    }

    public function civilarchitecture(){

    	 return view('public.service.civil-architecture');
    }

    public function communications(){

    	 return view('public.service.communications');
    }

    public function construction(){

    	 return view('public.service.construction');
    }

    public function electrical(){

    	 return view('public.service.electrical');
    }

    public function industrial(){

    	 return view('public.service.industrial');
    }

    public function mechanical(){

    	 return view('public.service.mechanical');
    }

}
