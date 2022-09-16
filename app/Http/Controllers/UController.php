<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('search')){
            return view('dashboard.user.index', [
                'users' => User::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
                'roles' => DB::table('roles')->get()
            ]);
        }else{
            return view('dashboard.user.index', [
                'users' => DB::table('users')->paginate(10),
                'roles' => DB::table('roles')->get()
            ]); 
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create', [
            "roles" => Role::all()
        ]);
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
            "name" => 'required|max:255',
            "role_id" => 'required',
            "username" => ['required', 'min:3', 'max:255', 'unique:users'],
            "email" => 'required|email:dns|unique:users',
            "password" => 'required|min:5|max:255'
        ]);

        
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['email_verified_at'] = date("Y-m-d H:i:s");

        User::create($validatedData);

        return redirect('/dashboard/users')->with('success', "New User Successfully Added!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // dd($user);
        // dd($user->id);
        return view('dashboard.user.edit', [
            'user' => $user,
            'roles' => Role::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            "name" => 'required|max:255',
            "role_id" => 'required',
            "username" => ['required', 'min:3', 'max:255'],
            "email" => 'required|email:dns',
            "password" => 'required|min:5|max:255'
        ];

        if($request->username != $user->username){
            $rules['username'] = 'required|max:255';
        }
        if($request->email != $user->email){
            $rules['email'] = 'required|email:dns|';
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['email_verified_at'] = date("Y-m-d H:i:s");

        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboard/users')->with('success', 'User has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        // $user->delete();
        return redirect('/dashboard/users')->with('success', "post has been deleted");
        // echo 'test';

    }
}
