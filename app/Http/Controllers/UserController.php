<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('isAdmin');

        $user = User::all();
        return view('user.index',[
            'user'=>$user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('isAdmin');

        return view('user.create');
    }

    public function store(user $user, Request $request)
    {
        dd($request);

        // $this->authorize('isAdmin');

        $user = new user();
        $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        $user->role = $request->role;

        $user->save();
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        $this->authorize('isAdmin');
        return view('user.edit',[
            'user'=>$user
        ]);
    }


    public function update(Request $request, user $user)
    {
        $this->authorize('isAdmin');
        $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        $user->role = $request->role;

        $user->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $this->authorize('isAdmin');
        $user->delete();
        return redirect('/user')
        ->with('success', 'deleted successfully');
    }
}
