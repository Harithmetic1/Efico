<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingList;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Training;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('template.index');
    }
    public function about()
    {
        return view('template.about');
    }
    public function contact()
    {
        return view('template.contact');
    }
    public function services()
    {
        return view('template.service');
    }
    public function news()
    {
        return view('template.news');
    }
    public function faqs()
    {
        return view('template.faqs');
    }
    public function register()
    {
        return view('template.payment');
    }
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        $user = new MailingList;
        $user->email = $email;
        $user->save();

        return back()->with('success', 'Subscription Successful');
    }
    public function makeAdmin(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $cpassword = $request->input('password_confirmation');

        if(count(User::where('email', $email)->get()) > 0) {
            return back();
        } else {
            if($password != $cpassword) {
                return back();
            } else {
                $admin = new User;
                $admin->name = $name;
                $admin->email = $email;
                $admin->password = Hash::make($password);
                $admin->save();

                return back();
            }
        }

        return back();
    }
    public function newTraining(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $cover_image = 'business.png';

        $training = new Training;
        $training->price = $price;
        $training->name = $name;
        $training->cover_image = $cover_image;
        $training->save();

        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
