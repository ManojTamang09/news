<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\UploadTextImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadTextImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $flag=0;
        $images=DB::table('upload_text_images')
        ->select('upload_text_images.*')
        ->where('upload_text_images.status',$flag)
        ->get();
            // $images=UploadTextImage::all();
            $photos=Photo::all();

            return view('pages.textimage.index',compact('images','photos'));
    }


    public function final()
    {

    $flag=1;
    $images=DB::table('upload_text_images')
    ->select('upload_text_images.*')
    ->where('upload_text_images.status',$flag)
    ->get();
    $photos=Photo::all();

    return view('pages.textimage.approved',compact('images','photos'));
    }

    public function delete($id)
    {
    //    dd($id);
        $attach=Photo::find($id);
        $attach->delete();
        return redirect()->back()->with('message','Record deleted successfully!!!');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.textimage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'description' => 'required',
            'heading' => 'required',
            'documents.*'=>'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        $data=$request->all();
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 0;

        $lastid = UploadTextImage::create($data)->id;

        if($request->documents==null)
        {
            return redirect()->route('textimage.create')->with('message', 'Created successfully!!!');
        }
        else{
            foreach ($request->documents as $item => $value) {

                $documents[$item] = $request->documents[$item]->hashName();
                $request->documents[$item]->move(public_path('photos'), $documents[$item]);
                $data1 = array(
                    'documents.*'=>'required|mimes:jpeg,jpg,png,png|max:2000',
                    'photo_id' => $lastid,
                    'photo' => $documents[$item],
                );
                $db1 = new Photo($data1);
                $db1->save();
            }
        return redirect()->route('textimage.create')->with('message', 'Created successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadTextImage  $uploadTextImage
     * @return \Illuminate\Http\Response
     */
    public function show(UploadTextImage $uploadTextImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadTextImage  $uploadTextImage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=UploadTextImage::find($id);
        $photos=Photo::all();
        return view('pages.textimage.edit',compact('user','photos'));
    }


    public function approve(Request $request, $id)
    {


        $validatedData = $request->validate(['status'=>'required']);
        $data = $request->all();

           $status_id=$request->status;

                $task = UploadTextImage::findorfail($id);
                $task->update([
                   'status' => $status_id,
                    ]);
                    return redirect()->back()->with('message','Approved Successfully!!!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadTextImage  $uploadTextImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'documents.*'=>'mimes:jpeg,jpg,png,png|max:2000',

        ]);
        $photo=UploadTextImage::findorfail($id);
        // $user = auth()->user()->id;
        $photo->update([
            'heading' =>$request->heading,
            'description' =>$request->description,
            'user_id' => auth()->user()->id,
               'status' =>0,
              ]);

              if($request->documents==null)
              {
                return redirect()->back()->with('message','Record Updated successfully!!!');
              }
              else{
        foreach ($request->documents as $item => $value) {

            $documents[$item] = $request->documents[$item]->hashName();
            $request->documents[$item]->move(public_path('photos'), $documents[$item]);
            $data1 = array(
                'documents.*'=>'mimes:jpeg,jpg,png',
                'photo_id' => $id,
                'photo' => $documents[$item],
            );
            $db1 = new Photo($data1);
            $db1->save();
        }
        return redirect()->back()->with('message','Record Updated successfully!!!');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadTextImage  $uploadTextImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        // dd($id);
        // dd($request->all());
        $attach=UploadTextImage::find($id);
        $attach->delete();
        $new=DB::table('photos')
        ->select('photos.*')
        ->where('photos.photo_id',$request->newid)
        ->delete();
        return redirect()->back()->with('message','Record deleted successfully!!!');
    }
}
