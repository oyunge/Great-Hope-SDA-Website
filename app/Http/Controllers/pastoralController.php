<?php

namespace App\Http\Controllers;


use App\Models\Pastoral;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
class pastoralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $pastors = Pastoral::all();
        $welcomes = Welcome::all ();
        return view('about',['pastors' => $pastors ,'welcomes' =>  $welcomes]);
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
        $this -> validate($request,[
            // nullable means optional is not necessary a user to upload an image
           'cover_image' => 'image|nullable|max:1999',
           'name' => 'required',
           'position'  => 'required',
           ]);
             //handle file upload
    if($request->hasFile('cover_image')){
        //Get filename with the extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
         //get just filename
         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //get just ext
         $extension = $request->file('cover_image')->getClientOriginalExtension();
         //filename to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         //upload image
         $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else{
        $fileNameToStore = 'noimage.jpg';
    }
      //create post
      $pastoral = new  Pastoral;
      $pastoral->cover_image = $fileNameToStore;
      $pastoral->name = $request->input('name');
      $pastoral->position = $request->input('position');
     
      $pastoral->save();
return redirect('pastoral');
       
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
