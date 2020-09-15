<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ContactController extends Controller
{
    function postContact(Request $request)
    {

        $rules = [

            "email" => "email|required",
            "phone" => "required",
            "message" => "required",
            "Fullname" => "required",
        ];

        $validation = $request->validate($rules);

        if (!$validation) {

            return route("contact");

        } else {


            $contact = new Contact();
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->Fullname = $request->Fullname;

            if ($contact->save()) {

                return view("contact");

            }


        }

    }

}

