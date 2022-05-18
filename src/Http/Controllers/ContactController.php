<?php

namespace Mengtrikea\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mengtrikea\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());

        return back()->with('message', 'WORKS!');
    }
}
