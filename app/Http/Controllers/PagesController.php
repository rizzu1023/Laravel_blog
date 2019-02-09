<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PagesController extends Controller
{
    public function getIndex(Request $request,Response $response){
        $title = 'Index';
        return view("pages.index")->with('title',$title);
    }



    public function getContact(Request $request, Response $response){
        $title = 'Contact';
        return view('pages.contact', compact('title'));   //1st method
    }

    public function getAbout(Request $request, Response $response){
    
        $title = 'About';
        return view('pages.about')->with('title',$title);    //2nd method  
        
    }

    public function getServices(Request $request, Response $response){
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'Programming', 'SEO', 'MachineLearning'],
        );
        return view('pages.services')->with($data);   //3rd method
    }
}
