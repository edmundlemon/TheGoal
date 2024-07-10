<?php

namespace App\Http\Controllers;

use App\Models\Inquiries;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'consent' => 'required'
        ]);

        $inquiry = new Inquiries();
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->message = $request->message;
        $inquiry->save();

        return redirect()->back()->with('message', 'Inquiry sent successfully');
    }
}
