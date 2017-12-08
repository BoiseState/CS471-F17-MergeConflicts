<?php

namespace App\Http\Controllers;
use App\VolunteerForms;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VolunteerForms $volunteerForms)
    {
        $forms = $volunteerForms->getNewVolunteerForms();
        return view('admin', ['forms' => $forms]);
    }
}