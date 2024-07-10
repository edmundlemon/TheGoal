<?php

namespace App\Http\Controllers;

use App\Models\Feedbacks;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    //
    public function index()
    {
        return view('feedback');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            // 'email' => 'required|email',
            'message' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $feedback = new Feedbacks();
        $feedback->name = auth('customer')->user()->name;
        $feedback->email = auth('customer')->user()->email;
        $feedback->message = $request->message;
        $feedback->rating = $request->rating;
        $feedback->save();

        return view('index')->with('success', 'Feedback submitted successfully!');
    }
}
