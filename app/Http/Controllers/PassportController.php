<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\passport;
use App\user;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = "Dashboard";
        $passports = passport::simplepaginate(5);

        /* // One to One Eloquent Relationship Reverse
        $passports = passport::find(2)->user;
         // $passports = passport::has('user')->get();
        return $passports;*/
       

        /*$passports = passport::find(4);
        foreach($passports->user as $user)
        {
             dd($user);
        }*/

        /*$passports = passport::whereHas('user', function ($query) {
            $query->where('name', 'like', 'j%');
        })->get();
        return $passports;*/

        /*$passport = passport::doesntHave('user')->get();
        return $passport;*/

        /*$passport = passport::whereDoesntHave('user', function ($query) {
            $query->where('name', 'like', 'j%');
        })->get();
        return $passport;*/


        /*$passports = passport::withCount('user')->get();

        foreach ($passports as $passport) {
            return $passport->user_count;
        }*/

        /*$comment = new user(['name' => 'jay']);

        $passports = passport::find(1);

        $passports->user()->save($comment);
        return $passports;*/


        return view('passport.index',compact('passports','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $name = "Create Page";
        return view('passport.create',compact('name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'number' => 'required',
            'user_id' => 'required',
        ]);

        $passports = new passport();
        $passports->number = $request->number;
        $passports->user_id = $request->user_id;
        $passports->save();
        session()->flash('message','Your Record Stored Successfully');

        return redirect('passport');
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
