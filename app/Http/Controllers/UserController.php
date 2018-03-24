<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class UserController extends Controller
{
    public function postRegister(Request $request) {

        $firstname = $request->input('firstName');
        $lastname = $request->input('lastName');
        $plusone = $request->input('plusOne') ? $request->input('plusOne') : 0;

        $user = Guest::create([
            'firstName' => $firstname,
            'lastName' => $lastname,
            'plusOne' => $plusone,
        ]);
        return redirect('/rsvp')->with('name', "$firstname");
    }
}
