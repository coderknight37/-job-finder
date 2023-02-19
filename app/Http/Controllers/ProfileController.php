<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\profile;
// use Illuminate\Support\Facades\Auth as FacadesAuth;
use Symfony\Component\HttpKernel\Profiler\Profile as ProfilerProfile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $User = Auth::user();
        // $id = Auth::id();
        if(auth()->user()->profile === null) {
            // $profile = profile::create([
            //     'province' =>'krkuk',
            //     'user_id' =>$id,
            //     'gender' =>'male',
            //     'bio' =>'holle word',
            // ]);
            return redirect()->route("profile.create");
        }
        
        return view('layout.welcome');


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
        //
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
    public function update(Request $request)
    {   /*
        $this->validate($request,[
            'name' =>'required',
            'province' =>'required',
                'gender' =>'required',
                'bio' =>'required',

        ]);
            $User = Auth::user();
            $User->name= $request name;
            $User->profile->province= $request province;
            $User->profile->gende= $request gende;
            $User->profile->bio= $request bio;
            $User->save();
            if($request->has('password')){
                $User->password = bcrypt($request->password);
                $User->save();
            }
            */
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
