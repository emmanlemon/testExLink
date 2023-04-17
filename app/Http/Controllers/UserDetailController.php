<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserDetailRequest;
use App\Models\User;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at' , 'DESC')->get();
        return view('user_detail.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserDetailRequest $request)
    {
        User::create([
            'name' => $request->name." ".$request->surname,
            'address' => $request->address,
            'date' => $request->date." ".$request->time
        ]);
        return redirect()->back()->with('message' , 'New User Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserDetailRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name." ".$request->surname,
            'address' => $request->address,
            'date' => $request->date." ".$request->time
        ]);
        return redirect()->back()->with('message' , 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
