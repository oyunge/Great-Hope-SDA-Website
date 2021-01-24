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
        $this -> validate($request,[
            // nullable means optional is not necessary a user to upload an image
       
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'featured_mp3'=>'required',
           'pdf_doc'=> 'required',
           "title" => "required",
           "sermonFrom" => "nullable",
            "categories" => "nullable",
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

    if($request->hasFile('featured_mp3')){
        //Get filename with the extension
        $featured_mp3filenameWithExt = $request->file('featured_mp3')->getClientOriginalName();
         //get just filename
         $featured_mp3filename = pathinfo($featured_mp3filenameWithExt, PATHINFO_FILENAME);
         //get just ext
         $featured_mp3extension = $request->file('featured_mp3')->getClientOriginalExtension();
         //filename to store
         $featured_mp3fileNameToStore = $featured_mp3filename.'_'.time().'.'.$featured_mp3extension;
         //upload image
         $path = $request->file('featured_mp3')->storeAs('public/featured_mp3s', $featured_mp3fileNameToStore);
        } else{
        $featured_mp3fileNameToStore = 'noaudio.mp3';
    }

    if($request->hasFile('pdf_doc')){
        //Get filename with the extension
        $pdf_docFilenameWithExt = $request->file('pdf_doc')->getClientOriginalName();
         //get just filename
         $pdf_docFilename = pathinfo($pdf_docFilenameWithExt, PATHINFO_FILENAME);
         //get just ext
         $pdf_docExtension = $request->file('pdf_doc')->getClientOriginalExtension();
         //filename to store
         $pdf_docFileNameToStore = $pdf_docFilename .'_'.time().'.'.$pdf_docExtension;
         //upload image
         $path = $request->file('pdf_doc')->storeAs('public/pdf_docs', $pdf_docFileNameToStore);
        } else{
        $pdf_docFileNameToStore = 'noDocument';
    }
    //audio
    // if ( $request->hasFile('audio') ) {
    //     // The file
    //     $music_file = $request->file('audio');
    
    //     // This will return "mp3" not the file name
    //     $filename = $request->file('audio')->getClientOriginalExtension();
    
    //     // This will return /audio/mp3
    //     $location = public_path('audio/' . $filename);
    
    //     // This will move the file to /public/audio/mp3/
    //     // and save it as "mp3" (not what you want)
    //     // example: /public/audio/mp3/mp3 (without extension)
    //     $music_file->move($location,$filename);
    
    //     // mp3 row in your column will just say "mp3"
    //     // since the $filename above is just an extension of the file
      
    // }
           //create post
           $sermon = new Sermon;
           $sermon->cover_image = $fileNameToStore;
           $sermon->featured_mp3 = $featured_mp3fileNameToStore;
           $sermon->pdf_doc = $pdf_docFileNameToStore;
        //    $sermon->featured_mp3 = $filename;
         
           $sermon->title = $request->input('title');
           $sermon->sermonFrom = $request->input('sermonFrom');
           $sermon->categories = $request->input('categories');
           $sermon->save();
           return redirect('sermons');
      
}
        // $rules = [
           
        //     "title" => "required",
        //     "sermonFrom" => "required",
        //     "categories" => "required",
            
        // ];

        // $validation = $request->validate($rules);

        // if (!$validation) {

        //     return route("index");

        // } else {


    //         $sermon = new Sermon();
    //         $sermon->title = $request->title;
    //         $sermon->sermonFrom = $request->sermonFrom;
    //         $sermon->categories = $request->categories;
           

    //         if ( $sermon->save()) {

    //           return redirect ("sermons");

    //         }


    //     }

    // }
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
