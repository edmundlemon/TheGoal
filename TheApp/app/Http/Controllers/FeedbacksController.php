<?php

namespace App\Http\Controllers;

use App\Models\Feedbacks;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    //
    public function index()
    {
        return view('feedback', [
            'feedbacks' => Feedbacks::all(),
        ]);

    }

    public function destroy($id)
    {
        Feedbacks::destroy($id);
        return redirect()->back()->with('success', 'Feedback deleted successfully');
    }

    public function adminIndex()
    {
        return view('view-all-feedback', [
            'feedbacks' => Feedbacks::all(),
        ]);
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
        $feedback->customer_id = auth('customer')->user()->id;
        $feedback->message = $request->message;
        $feedback->rating = $request->rating;
        $feedback->save();

        return view('index')->with('success', 'Feedback submitted successfully!');
    }
}
