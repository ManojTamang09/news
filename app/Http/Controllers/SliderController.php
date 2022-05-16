<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=DB::table('sliders')
        ->select('sliders.*')
        ->get();


        return view('pages.slider.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.slider.create');
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
            'name' => 'required',
            'document'=>'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        $data=$request->all();
        // $data['user_id'] = auth()->user()->id;
        // $data['status'] = 0;
        $documents = $request->document->hashName();
        $request->document->move(public_path('sliderdoc'), $documents);
        $data['document']=$documents;
        Slider::create($data);
        return redirect()->route('slider.create')->with('message', 'Created successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Slider::find($id);
        return view('pages.slider.edit',compact('user',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'document'=>'image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        $hoddata = Slider::find($id);
        $data= $request->all();

        if($request->document!=null)
        {
            $documents = $request->document->hashName();
            $request->document->move(public_path('sliderdoc'), $documents);
            $data['document']=$documents;
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
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attach=Slider::find($id);
        $attach->delete();
        return redirect()->back()->with('message','Record deleted successfully!!!');
    }
}
