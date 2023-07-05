<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index(){
        if (Auth::user()->level !=1 )
            return redirect()->route('dashboard')->with('status', 'route access denied');

        $users = User::getApprovedUsers()->get();

        return view('users.index',
            compact(
                'users',
            )
        );
    }

    public function approveUser(User $user){
        $user->update([
            'level' => 2,
        ]);
//        return redirect()->route('dashboard')->with('status', 'Tag assigned successfully');
        return $this->redirectWithStatus('users', 'update', $user, 'title');
    }

    public function denyUser(User $user){
        $user->delete();
        return $this->redirectWithStatus('users', 'destroy', $user, 'title');
    }
}
