<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('layouts.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.user.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new User;

        $user->name = $request->name;
        $user->card = $request->card;
        $user->nto_date = $request->nto_date;
        $user->adress = $request->adress;
        $user->phone = $request->phone;

        $user->save();

        return Redirect('/user')->with('message','Guardado Satisfactoriamente !');
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
        $user = User::find($id);

        return view('layouts.user.edit',compact('user'));
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
        $user = User::find($id);
        $this->validate(request(), [
           'name' => 'required',
           'card' => 'required',
           'nto_date' => 'required',
           'adress' => 'required',
           'phone' => 'required',
         ]);
         $user->name = $request->name;
         $user->card = $request->card;
         $user->nto_date = $request->nto_date;
         $user->adress = $request->adress;
         $user->phone = $request->phone;
         $user->save();

         return Redirect('/user')->with('message','Guardado Satisfactoriamente !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return Redirect('/user');
    }
}
