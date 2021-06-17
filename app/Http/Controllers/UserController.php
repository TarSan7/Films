<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Film;
use App\Models\listusers;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{

    public function main()
    {
        $obj = Film::all();
        return view('main', ['films' => $obj]);
    }

    public function about(){
        return view('about');
    }

    public function register()
    {
        return view('register');
    }

    public function registerData(Request $rec){
        $users = User::all();
        $valid = $rec->validate([
            'login' => 'min:4|max:50',
            'password' => 'min:4|max:30'
        ]);
        $ps = mb_strtolower($rec->input('password'));
        if ($users->where('password', '=', $ps) != '[]') {
            return view('register-message', ['message' => "This password have already existed."]);
        }else{
            $obj = new User();
            $obj->login =$rec->input('login');
            $obj->password = $ps;
            $obj->user_name = $rec->input('user_name');
            $obj->save();
            return view('register-message', ['message' => "You registered successfully!"]);
        }
    }

    public function authorized()
    {
        return view('authorized');
    }

    public function userdata(Request $rec)
    {
        $valid = $rec->validate([
            'login' => 'min:4|max:50',
            'password' => 'min:4|max:30'
        ]);
        $obj = User::all();
        if ($obj->where('login', '=', $rec['login']) -> where('password', '=', $rec['password']) != '[]') {
            return view('register-message', ['message' => "You authorized successfully!"]);
        } else {
            return view('register-message', ['message' => "Tou didn`t authorize."]);
        }
    }

    public function comment()
    {
        $allCom = new Comment();

        return view('coment', ['data' => $allCom -> orderBy('id', 'desc') -> get()]);
    }

    public function comentOne($id)
    {
        $allCom = Comment::all();

        return view('comentOne', ['data' => $allCom->where('id', '=', $id)]);
    }

    public function data(Request $rec){
        $valid = $rec->validate([
            'name' => 'min:4|max:50',
            'comment' => 'max:1000'
        ]);
        $obj = new Comment();

        $obj->name = $rec->input('name');
        $obj->date = $rec->input('date');
        $obj->comment = $rec->input('comment');
        $obj->save();

        return redirect()->route('comment');
    }

    public function user(Request $rec)
    {
        
        return redirect()->route('comment');
    }
}
