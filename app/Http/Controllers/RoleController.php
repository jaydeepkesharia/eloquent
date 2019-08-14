<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = "Dashboard";
        $roles = role::simplepaginate(5);
        
        /*// Many to Many Eloquent Relationships Reverse
        $roles = role::find(1)->user;
        return $roles; */

        return view('role.index',compact('roles','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $name = "Create Page";
        return view('role.create',compact('name'));
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
            'role' => 'required',
        ]);

        $roles = new role();
        //dd($roles);
        $roles->role = $request->role;
        $roles->save();
        session()->flash('message','Your Record Stored Successfully');

        return redirect('role');
    }
}
