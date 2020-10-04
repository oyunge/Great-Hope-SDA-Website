<?php

namespace App\Http\Controllers;


use App\Models\AboutUs;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = AboutUs::all();
        return view ('about',['contents'=> $contents]);
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
            'title'=> 'required',
            'about' => 'required',
            // nullable means optional is not necessary a user to upload an image
           'cover_image' => 'image|nullable|max:1999',
           'name' => 'required',
           'position'  => 'required'
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
        $content = new AboutUs;
        $content->title = $request->input('title');
        $content->about = $request->input('about');
        $content->cover_image = $fileNameToStore;
        $content->name = $request->input('name');
        $content->position = $request->input('position');
        $content->save();
        return redirect('about');
     
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
