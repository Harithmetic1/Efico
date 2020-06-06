<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
use App\MailingList;
use App\Trainee;
use App\Training;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        $subscribers = MailingList::orderBy('email', 'asc')->paginate(20);
        $trainees = Trainee::orderBy('fullname', 'asc')->paginate(5);
        $trainings = Training::orderBy('created_at', 'desc')->paginate(10);
        $users = User::orderBy('name', 'asc')->paginate(10);
        return view('home')->with([
            'news' => $news,
            'subscribers' => $subscribers,
            'trainees' => $trainees,
            'trainings' => $trainings,
            'users' => $users,
        ]);
    }
}
