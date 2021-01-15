<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function callback()
    {
        return view('callback');
    }

    public function sreq()
    {
        return view('sreq');
    }

    public function service_a()
    {
        return view('services.service_a');
    }

    public function service_b()
    {
        return view('services.service_b');
    }

    public function service_c()
    {
        return view('services.service_c');
    }

    public function service_d()
    {
        return view('services.service_d');
    }

    public function service_e()
    {
        return view('services.service_e');
    }

    public function service_f()
    {
        return view('services.service_f');
    }

    public function service_g()
    {
        return view('services.service_g');
    }

    public function plag()
    {
        return view('services.plag');
    }

    public function training_a()
    {
        return view('trainings.training_a');
    }

    public function training_b()
    {
        return view('trainings.training_b');
    }

    public function training_c()
    {
        return view('trainings.training_c');
    }
}
