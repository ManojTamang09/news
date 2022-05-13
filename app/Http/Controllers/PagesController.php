<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Photo;
use App\Models\UploadTextImage;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $images=UploadTextImage::all();
            $photos=Photo::all();
        return view('visitor.welcome',compact('images','photos'));
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

    public function details(Request $request, $id)
    {
        $img=UploadTextImage::find($id);
        $photos=Photo::all();
        $flag=1;
        $images=DB::table('upload_text_images')
        ->select('upload_text_images.*')
        ->where('upload_text_images.status',$flag)
        ->orderBy('id','desc')
        ->take(3)->get();

        $photo=Photo::all();
        $video=DB::table('videos')
        ->select('videos.*')
        ->where('videos.status',$flag)
        ->orderBy('id', 'desc')
        ->take(3)->get();


        return view('visitor.details',compact('img','photos','images','photo','video'));
    }

    public function postdetails()
    {

        $photos=Photo::all();
        $flag=1;
        $images=DB::table('upload_text_images')
        ->select('upload_text_images.*')
        ->where('upload_text_images.status',$flag)
        ->orderBy('id','desc')
        ->take(3)->get();

        $photo=Photo::all();
        $video=DB::table('videos')
        ->select('videos.*')
        ->where('videos.status',$flag)
        ->orderBy('id', 'desc')
        ->take(4)->get();


        return view('visitor.postdetails',compact('photos','images','photo','video'));
    }

    public function allvideos()
    {

        $photos=Photo::all();
        $flag=1;
        $images=DB::table('upload_text_images')
        ->select('upload_text_images.*')
        ->where('upload_text_images.status',$flag)
        ->orderBy('id','desc')
        ->take(3)->get();

        $photo=Photo::all();
        $video=DB::table('videos')
        ->select('videos.*')
        ->where('videos.status',$flag)
        ->orderBy('id', 'desc')
        ->take(4)->get();


        return view('visitor.allvideos',compact('photos','images','photo','video'));
    }

    public function detailsvideos(Request $request, $id)
    {
        $img=Video::find($id);
        $photos=Photo::all();
        $flag=1;
        $images=DB::table('upload_text_images')
        ->select('upload_text_images.*')
        ->where('upload_text_images.status',$flag)
        ->orderBy('id','desc')
        ->take(3)->get();

        $photo=Photo::all();
        $video=DB::table('videos')
        ->select('videos.*')
        ->where('videos.status',$flag)
        ->orderBy('id', 'desc')
        ->take(3)->get();


        return view('visitor.detailsvideos',compact('img','photos','images','photo','video'));
    }


    public function contact()
    {
        return view('visitor.contact');
    }

    public function about()
    {
        return view('visitor.about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages $pages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pages $pages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $pages)
    {
        //
    }
}
