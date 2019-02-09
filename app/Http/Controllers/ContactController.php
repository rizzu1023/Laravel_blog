<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ContactController extends Controller
{
    public function getContact(Request $request, Response $response){
        return view('contact');
    }

    public function getAbout(Request $request, Response $response){
        return view('about');
    }

}
