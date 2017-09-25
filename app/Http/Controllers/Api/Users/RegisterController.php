<?php

namespace App\Http\Controllers\Api\Users;

use Validator;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    /**
     * Creates a user in the database and returns the newly created user
     *
     * @param Request $request
     *
     * @return void
     */
    public function register(Request $request)
    {
        $data = $request->all();
        $validator = $this->validator($data);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Invalid request data',
                'errors' => $validator->errors()
            ], 400);
        }

        $user = User::create([
            'username' => $data['username'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json($user);
    }

    /**
     * Validates an incoming request's data
     *
     * @param array $data
     *
     * @return void
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255|unique:users',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
}
