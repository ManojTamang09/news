<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hod= User::all();
        return view('pages.usermaster.index',compact('hod'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.usermaster.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $this->validate($request, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255','unique:users'],
        'password' => 'required|string|min:6|confirmed',
        'contact' => ['required', 'integer'],
        'role_id' =>['required', 'integer'],

    ]);

    $data=$request->all();
    // dd($data);
    $user=  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'contact'=>$data['contact'],
            'role_id' =>$data['role_id'],

        ]);
        $role1=$request->role_id;

      //  $role = Role::select('id')->where('name','user')->first();
        $user->roles()->attach($role1);
        return redirect()->back()->with('message',' Data created successfully!!!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }



    // public function findByDesignation(Request $request)
    // {

    //     //$request->id here is the id of our chosen option id
    //     $data=User::select('name','id')->where('id',$request->id)->take(100)->get();
    //     return response()->json($data); //then sent this data to ajax success
    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        $role= Role::all();
        return view('pages.usermaster.edit',compact('user','role'));
    }

    // public function changeprofile($id)
    // {


    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => 'required|string|min:6|confirmed',
            'contact' => ['required', 'integer'],
            'role_id' =>['required', 'integer'],

            ]);

            $data= $request->all();

            $user = User::find($id);

            if($user->email==$request->email)

            {

                $user->update([

                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'contact'=>$data['contact'],
                    'role_id' =>$data['role_id'],

                ]);

            }

            else{

            $user->update([

                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'contact'=>$data['contact'],
                'role_id' =>$data['role_id'],
        ]);

            }

        $user->roles()->sync($request->role_id);
        return redirect()->route('usermaster.index')->with('message','Record updated successfully!!!');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hod=User::find($id);
        $hod->roles()->detach();
        $hod->delete();
        return redirect()->route('usermaster.index')->with('message','Record deleted successfully!!!');
        // abort(403);
    }
}
