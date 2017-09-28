<?php

namespace App\Http\Controllers;

use App\Message;
use App\Subscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::all();
        $subscriptions = Subscription::all();

        $newMessages = Message::new()->get();
        $newSubscriptions = Subscription::new()->get();

        return view('admin.index', compact('messages', 'subscriptions', 'newMessages', 'newSubscriptions'));
    }
}
