<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate(['email'=>'required|email|max:40']);
        $exists = Newsletter::where('email', $request->email)->first();
        if ($exists) {
            toastr()->warning('Email already taken!', 'Error');
            return back();
        }

        //save

        Newsletter::create($request->all());
        toastr()->success('You have been successfully subscribed to our newsletter!', 'Success');
        return back();
    }

    public function emails()
    {
        $emails  = Newsletter::latest()->paginate(10);
        return view('dashboard.admin.newsletters.emails', compact('emails'));
    }
}
