<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Unite;
use App\Poste;

class UsersController extends Controller
{
    public function index()
    {        
        $users = Poste::join('users', 'users.poste_id', '=', 'users.id')->select('users.*', 'postes.*')->get();
        //dd($poste);

        //$unites = Unite::all();
        return view('users.listeperso', compact('users'));

        //return view('/users/listeperso', ['users' => $users]);

        //   $users = Poste::join('users', 'users.poste_id', '=', 'postes.id')->select('users.*', 'postes.*')->get();
        //   //dd($users);
        // //$unites = Unite::all();
        // return view('users.listeperso', compact('users'));

        $users = User::get();

     
        
        
        //$users = Poste::join('users', 'users.poste_id', '=', 'postes.id')->select('users.*', 'postes.*')->get();
          
        return view('users.index', compact('users'));
    }

    public function show(User $users)
    {
        //$users = User::where('users.id', $users->id)->first();
        $users = User::Where('id', $users->id)->get();
        dd($users);
        return view('users.show', ['users'=>$users]);

    }
}
