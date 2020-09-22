<?php

namespace App\Http\Controllers;


use App\Models\Sermon;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;
class SermonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons = Sermon::all();
        
        return view('sermons',['sermons'=>$sermons] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
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
            "sermonFrom" => "required",
            "categories" => "required",
            
        ];

        $validation = $request->validate($rules);

        if (!$validation) {

            return route("index");

        } else {


            $sermon = new Sermon();
            $sermon->title = $request->title;
            $sermon->sermonFrom = $request->sermonFrom;
            $sermon->categories = $request->categories;
           

            if ( $sermon->save()) {

              return redirect ("sermons");

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
