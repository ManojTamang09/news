<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\RoleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flag=0;
    $videos=DB::table('videos')
    ->select('videos.*')
    ->where('videos.status',$flag)
    ->get();


        return view('pages.video.index',compact('videos'));
    }

    public function final()
    {

    $flag=1;
    $videos=DB::table('videos')
    ->select('videos.*')
    ->where('videos.status',$flag)
    ->get();

    return view('pages.video.approved',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.video.create');
    }

    public function approvevideo(Request $request, $id)
    {


        $validatedData = $request->validate(['status'=>'required']);
        $data = $request->all();

           $status_id=$request->status;

                $task = Video::findorfail($id);
                $task->update([
                   'status' => $status_id,
                    ]);
                    return redirect()->back()->with('message','Approved Successfully!!!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'description' => 'required',
            'document'=>'required|mimes:mp4,mkv|max:20000',
            'title_photo'=>'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        $data=$request->all();
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 0;
        $title_photo = $request->title_photo->hashName();
        $request->title_photo->move(public_path('titlephoto'),$title_photo);
        $data['title_photo']=$title_photo;
        $documents = $request->document->hashName();
        $request->document->move(public_path('videodoc'), $documents);
        $data['document']=$documents;
        Video::create($data);
        return redirect()->route('video.create')->with('message', 'Created successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Video::find($id);
        return view('pages.video.edit',compact('user',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'description' => 'required',
            'document'=>'mimes:mp4,mkv|max:20000',
            'title_photo'=>'image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        $hoddata = Video::find($id);
        $data= $request->all();

        if($request->document!=null && $request->title_photo!=null)
        {
            $title_photo = $request->title_photo->hashName();
            $request->title_photo->move(public_path('titlephoto'),$title_photo);
            $data['title_photo']=$title_photo;
            $documents = $request->document->hashName();
            $request->document->move(public_path('videodoc'), $documents);
            $data['document']=$documents;
            $hoddata->update($data);
        return redirect()->back()->with('message','Edited Successfully!!!');

        }
        elseif($request->document!=null)
        {
            $documents = $request->document->hashName();
            $request->document->move(public_path('videodoc'), $documents);
            $data['document']=$documents;
            $hoddata->update($data);
        return redirect()->back()->with('message','Edited Successfully!!!');
        }

        elseif($request->title_photo!=null)
        {
            $title_photo = $request->title_photo->hashName();
            $request->title_photo->move(public_path('titlephoto'),$title_photo);
            $data['title_photo']=$title_photo;
            $hoddata->update($data);
        return redirect()->back()->with('message','Edited Successfully!!!');
        }

        else{
        $hoddata->update($data);
        return redirect()->back()->with('message','Edited Successfully!!!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attach=Video::find($id);
        $attach->delete();
        return redirect()->back()->with('message','Record deleted successfully!!!');
    }
}
