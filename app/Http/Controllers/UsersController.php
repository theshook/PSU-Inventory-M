<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public $title = 'Users';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('user_no', '!=', auth()->user()->user_no)->get();

        return view('user.index', [
            'users' => $users,
            'title' => $this->title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', [
            'title' => $this->title
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
        $attributes = $request->validate($this->validator());
        User::create($attributes);

        return redirect('/users/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', [
            'title' => $this->title,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', [
            'title' => $this->title,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $attributes = $request->validate([
            'user_fname' => ['required', 'string', 'min:2', 'max:255'],
            'user_lname' => ['required', 'string', 'min:2', 'max:255'],
            'user_mname' => ['required', 'string', 'min:1', 'max:255'],
        ]);
        $user->update($attributes);

        return redirect('/users')->with('success', 'User Successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('message', 'User Successfully Deleted.');
    }

    protected function validator()
    {
        return [
            'user_id' => ['required', 'integer', 'unique:users'],
            'user_fname' => ['required', 'string', 'min:2', 'max:255'],
            'user_lname' => ['required', 'string', 'min:2', 'max:255'],
            'user_mname' => ['required', 'string', 'min:1', 'max:255'],
        ];
    }
}
