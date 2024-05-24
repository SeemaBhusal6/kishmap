<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Team;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('priority')->get();
        return view('welcome', compact('teams'));
    }

    public function about()
    {
        return view('about');
    }
    public function introduction()
    {
        return view('introduction');
    }
    public function mission()
    {
        return view('mission');
    }

    public function contactus()
    {
        return view('contactus');
    }
    public function course()
    {
        return view('course');
    }
    public function gallerys()
    {
        return view('gallerys');
    }
    public function showlogin()
    {
        return view('auth.adminlogin');
    }
    public function notices()
    {
        $notices = Notice::where ('show',1)->orderBy('priority')->get();
        
        return view('notices',compact('notices'));
    }

    public function views($id)
    {
        $view=  Notice::find($id);
        
        return view('views',compact('view'));
    }

    public function studentlogin()
    {
        return view('studentlogin');
    }
    public function studentregister()
    {
        return view('studentregister');
    }
    
}
