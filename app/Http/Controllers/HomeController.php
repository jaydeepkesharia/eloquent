<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\passport;
use App\role;
use App\country;
use App\mobile;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = "Dashboard";
        $users = user::simplepaginate(5);
        
        /* // One to One Eloquent Relationships
        $users = user::find(2)->passport;
        return $users;  */

        /*// One to Many Eloquent Relationships
        $users = user::find(1)->mobile;
        return $users;*/

        /*$comment = new mobile(['number' => 1234]);

        $users = user::find(1);

        $result =$users->mobile()->save($comment);
        return $result;*/

        /*// Many to Many Eloquent Relationships
        $users = user::find(2)->role;
        return $users;*/

        /*//has Many through
        $country = country::find(1)->post;
        return $country;*/

       /* $contents = user::get('name');
        return $contents;*/

        return view('user.index',compact('users','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $name = "Create Page";
        return view('user.create',compact('name'));
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
            'name' => 'required|alpha',
        ]);

        $users = new user();
        $users->name = $request->name;
        $users->save();
        session()->flash('message','Your Record Stored Successfully');

        return redirect('home');
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
