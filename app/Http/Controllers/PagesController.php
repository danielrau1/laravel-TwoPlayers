<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use DB; //[3]


class PagesController extends Controller
{
    public function index()
    {
     $title = "Welcome to TwoPlayers!";
        return view('pages/index')->with('title',$title);
        }


    public function register()
    {
        return view('pages/register');
    }



    public function createUser()
    {
        /*
        //[2]
        $data=[
        'name' => $_POST['name'],
            'password' => $_POST['password']
        ];
        return view('pages/test')->with($data);//[1], [2]
        */

        //[3]
        $name = $_POST['name'];
        $password = $_POST['password'];
        DB::insert('insert into users (name, password) values (?, ?)', [$name, $password]);
        return view('pages/register');


    }






}
