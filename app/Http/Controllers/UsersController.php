<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Http\Request;

use App\User;


class UsersController extends Controller
{
   public function index()
   {
       $users = User::all();

       return view ('UsersPages.users' , compact('users'));
   }

    public function store()
    {
        request()->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'role' => 'required',
            'email' => 'required',

            ]);

        $user = new User();
        $user-> first_name = request('first_name');
        $user-> last_name = request('last_name');
        $user-> role = request('role');
        $user-> email = request('email');

        $pass = str_random(10);
        \Mail::to($user)->send(new Welcome($user, $pass));

        $CrptPass =  bcrypt($pass);

        $user-> password = $CrptPass;

        $user->save();

        return redirect('/users');
    }

   public function create()
   {
       return view ('UsersPages.add');
   }

    public function edit(User $user)
    {
        return view('UsersPages.edit' , compact('user'));
    }

    public function update(User $user)
    {
        request()->validate([
            'email' => 'required',
        ]);

        $user -> first_name = request('first_name');
        $user -> last_name = request('last_name');
        $user -> role = request('role');
        $user -> email = request('email');

        $user->save();
        return redirect('/users');
    }

    public function destroy(User $user)
    {
        $users = count(User::all());

        if($users > 1){
            $user->delete();
        }
        return redirect('/users');
    }

    Public function forgetPass ()
    {

        request()->validate([
            'email' => 'required',
        ]);

        $email = request()->input('email');
        $users = User::where('email' , $email)->first();
        if($users){
            $pass = str_random(10);
            \Mail::to($users)->send(new Welcome($users, $pass));

            $CrptPass =  bcrypt($pass);

            $users->password = $CrptPass;
            $users->save();
        }

    }
}
