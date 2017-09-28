<?php

namespace App\Http\Controllers;

use Validator;
use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{


    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->with('message', 'You may have forgotten to enter your email address')
                ->withInput();
        }

        Subscription::create($request->all());

        return redirect()
            ->back()
            ->with('message'. 'Thank you for subscribing to our newsletter. We promise not to spam you.');
    }

    private function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|string',
            'email_address' => 'required|email'
        ]);
    }
}
