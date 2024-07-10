<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|confirmed|min:8',
            'birth_date' => 'required|date|before:today',
            'gender' => 'required|in:Male,Female'
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->birth_date = $request->birth_date;
        $customer->gender = $request->gender;
        $customer->save();
        $request->session()->regenerate();
        return redirect('/login')->with('success', 'You have been registered successfully!');
    }

    public function edit($id)
    {
        return view('edit-customer', [
            'customer' => Customer::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email,' . $id,
            'birth_date' => 'required|date|before:today',
        ]);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->birth_date = $request->birth_date;
        $customer->save();
        return redirect()->back()->with('success', 'Customer updated successfully!');
    }



    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->back()->with('success', 'Customer deleted successfully!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('password');
        $credentials['email'] = $request['login_email'];
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/index');
        }
        return back()->withErrors([
            'login_email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'You have been logged out!');
    }

    public function index()
    {
        return view(
            'view-all-customers',
            ['customers' => Customer::all()]
        );
    }
}
