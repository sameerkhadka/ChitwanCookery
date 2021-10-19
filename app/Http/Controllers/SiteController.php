<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Homepage;

use App\About;

use App\Partner;

use App\Course;

use App\Instruction;

class SiteController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('order','ASC')->get();
        $data = Homepage::where('id', 1)->first();
        $courses = Course::orderBy('order','ASC')->get();
        return view('index', compact('data','partners','courses'));
    }

    public function about()
    {
        $data = About::orderBy('order','ASC')->get();
        return view('about', compact('data'));
    }

    public function apply()
    {
        $data = Instruction::where('id', 1)->first();
        $courses = Course::where('status', 1)->orderBy('order','ASC')->get();
        return view('join', compact('data','courses'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function partner($slug)
    {
        $data = Partner::where('slug',$slug)->first();
        return view('csi', compact('data'));
    }

    public function course_detail($slug)
    {
        $data = Course::where('slug',$slug)->first();
        return view('course', compact('data'));
    }

    public function course()
    {
        return view('course');
    }
}
