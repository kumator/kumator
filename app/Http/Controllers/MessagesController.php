<?php

namespace App\Http\Controllers;

use Validator;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back();
        }

        Message::create($request->all());

        return redirect()->back()->with('message', 'Your message sent successfuly. Thank you for contacting us');
    }

    private function validator(array $data)
    {
        return Validator::make($data, [
            'message' => 'required|string',
            'fullname' => 'required|string',
            'email_address' => 'required|email'
        ]);
    }
}
