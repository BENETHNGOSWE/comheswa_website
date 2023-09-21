<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class PagesController extends Controller
{
    public function index(){
        return view('layouts/navbar');
    } 

    public function home(){
        return view('layouts/HomePage');
    }
    
    
    public function headerPage() {
        return view('pages/headerpage');
    }

    public function services() {
        return view('pages/services');
    }

    public function aboutus() {
        return view('pages/aboutus');
    }

    public function mission() {
        return view ('pages/missionpage');
    }

    public function vision() {
        return view ('pages/visionpage');
    }

    public function objective() {
        return view ('pages/objectivespage');
    }

    public function contactus() {
        return view ('pages/contactus');
    }

    public function project1() {
        return view ('pages/project1');
    }

    public function project2() {
        return view ('pages/project2');
    }

    public function project3() {
        return view ('pages/project3');
    }

    public function project4() {
        return view ('pages/project4');
    }

    public function project5() {
        return view ('pages/project5');
    }

    public function project6() {
        return view ('pages/project6');
    }

    public function datasubmit(Request $req) {
        // print_r($req ->input());
        $data= new Subscriber;
        $data -> email = $req->email;
        echo $data -> save();
    }


 



}
