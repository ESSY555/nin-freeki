<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

public function home(){
    return view('front.home-page');
}
public function training(){
    return view('front.training.training');
}
public function index(){
    return view('front.nin-page');
}
public function bookingSection(){
    return view('front.booking.booking-section');
}
public function contactUs(){
    return view('front.contact-us');
}
public function dataPrivacy(){
    return view('front.data-privacy');
}
public function solarPanel(){
    return view('front.solar');
}

}
