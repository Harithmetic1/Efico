<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingList;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\News;
use App\Training;
use App\Trainee;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::orderBy('created_at', 'desc')->paginate(5);
        return view('template.index')->with('trainings', $trainings);
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
        $trainings = Training::orderBy('name', 'asc')->get();
        return view('template.payment')->with('trainings', $trainings);
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
    public function trainingReg(Request $request)
    {
        $name = $request->input('full_name');
        $email = $request->input('email');
        $training = $request->input('training');

        $trainee = new Trainee;
        $trainee->fullname = $name;
        $trainee->email = $email;
        $trainee->training_id = $training;
        $trainee->save();

        return back();
    }
    public function makeNews(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');
        $author = Auth::user()->name;
        $cover_image = 'Business_SVG 2.png';

        $news = new News;
        $news->title = $title;
        $news->body = $body;
        $news->cover_image = $cover_image;
        $news->author = $author;
        $news->save();

        return back();
    }
    public function deleteNews($id)
    {
        $news = News::find($id);

        $news->delete();

        return back();
    }
    public function deleteTraining($id)
    {
        $training = Training::find($id);

        $training->delete();

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
