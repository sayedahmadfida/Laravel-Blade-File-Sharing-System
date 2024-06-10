<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(session('user.type') != 'SUPER-ADMIN') return redirect()->back();
        $users = User::where('id', '!=', auth()->id())->paginate(10);
        return view('pages.user.index', compact('users'));
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
    public function store(Request $request)
    {
        if(session('user.type') != 'SUPER-ADMIN') return redirect()->back();

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'type' => $request->user_type,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'email_verified_at' => now(),
        ]);
        return redirect()->back();
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
        if(session('user.type') != 'SUPER-ADMIN') return redirect()->back();

        $targetedUser = User::findOrFail($id);

        $users = User::where('id', '!=', auth()->id())->paginate(10);
        return view('pages.user.index', compact('users', 'targetedUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(session('user.type') != 'SUPER-ADMIN') return redirect()->back();
        
        User::where('id', $id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'type' => $request->user_type,
            'email' => $request->email
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(session('user.type') != 'SUPER-ADMIN') return redirect()->back();
        
        return User::findOrFail($id)->delete();
    }
}
