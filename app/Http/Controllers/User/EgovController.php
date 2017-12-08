<?php

namespace App\Http\Controllers\User;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EgovController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function showBlog()
    {
        return view('user.dashboard_blog');
    }

    public function showAbout()
    {
        return view('user.dashboard_about');
    }

    public function showContact()
    {
        return view('user.dashboard_contact');
    }

    public function postContact(Request $request)
    {
        Contact::create($request->all());
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:9',
            'message' => 'required'
        ]);
        return back()->withSuccess('Thank you so much, your feedback make us growth to be a better company :)');
    }
}
