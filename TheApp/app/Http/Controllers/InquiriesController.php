<?php

namespace App\Http\Controllers;

use App\Models\Inquiries;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    //
    public function index()
    {
        return view('admin-inquiries', [
            'inquiries' => Inquiries::all()->sortBy('date')
        ]);
    }


    
    public function store(Request $request)
    {

        $customMessages = [
            'phone.regex' => 'Only valid phone numbers are allowed',
        ];
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => ['required', 'regex:/^(01\d{8}|01\d{9}|01\d-\d{7}|01\d-\d{8}|0\d{9}|0\d-\d{7})$/'],
            'date' => 'required|after:today',
            'time' => 'required',
            'services' => 'required',
            'message' => 'nullable',
            // 'consent' => 'required'
        ], $customMessages);
        
        $inquiry = new Inquiries();
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->message = $request->message;
        $inquiry->date = $request->date;
        $inquiry->time = $request->time;
        $inquiry->services = $request->services;

        $inquiry->save();

        return redirect()->back()->with('message', 'Inquiry sent successfully');
    }
}
