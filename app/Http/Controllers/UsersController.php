<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = User::search($request->name)->where('email','!=','admin@admin.com')->orderBy('id', 'ASC')->paginate(5);
        return view('admin/users')->with('users', $users);
    }

    public function create()
    {
      return view('users.create');
    }

    public function store(Request $request)
    {
      $user = new User($request->all());
      $user->password = bcrypt($request->password);
      $user->save();
      return redirect()->route('users.index');
    }

    public function show($id)
    {
      // code...
    }

    public function edit($id)
    {
      $user = User::find($id);
      return view('admin/update-user')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
      //find
      $user = User::find($id);
      $user->name = $request->name;
      $user->last_name = $request->last_name;
      $user->email = $request->email;
      if((!(is_null($request->password))) && trim($request->password)!=''){
        $user->password = bcrypt($request->password);
        }
      $user->save();
      return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    public function __construct()
    {
      $this->middleware('auth');
    }
}
