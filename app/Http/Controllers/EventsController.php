<?php


namespace App\Http\Controllers;

use App\Models\Event;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $events = Event::all();
        $events = DB::select('SELECT * FROM Events');
    return view('events') -> with('events' , $events);
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

        $rules = [

            "title" => "required",
            "location" => "required",
            "message" => "required",
            
        ];

        $validation = $request->validate($rules);

        if (!$validation) {

            return route("contact");

        } else {


            $event = new Event();
            $event->title = $request->title;
            $event->location = $request->location;
            $event->message = $request->message;
           

            if ($event->save()) {

                return view("contact");

            }


        }

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
