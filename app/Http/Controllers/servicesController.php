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

    	 return view('services');
    }

    public function civilarchitecture(){

    	 return view('service/civil-architecture');
    }

    public function communications(){

    	 return view('service/communications');
    }

    public function construction(){

    	 return view('service/construction');
    }

    public function electrical(){

    	 return view('service/electrical');
    }

    public function industrial(){

    	 return view('service/industrial');
    }

    public function mechanical(){

    	 return view('service/mechanical');
    }

}
