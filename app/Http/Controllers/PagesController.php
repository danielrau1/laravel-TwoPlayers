<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use DB; //[3]


class PagesController extends Controller
{
    public function index()
    {

        return view('pages/index');
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

        //[3.1]
        $results = DB::select('select * from users where name = :name and password=:password ', ['name' => $name,'password'=>$password]);
        $check= sizeof($results);
        if($check==0){
            DB::insert('insert into users (name, password) values (?, ?)', [$name, $password]);
            return view('pages/login');
        }
       else{
           return view('pages/index');
       }


    }

    //[4]
    public function login()
    {
        $message=""; //[4.1b]
        return view('pages/login')->with('message',$message);
    }


    //[4]
    public function loginUser()
    {

        $name = $_POST['name'];
            $password=$_POST['password'];


        //[4.1a]
        $results = DB::select('select * from users where name = :name and password=:password ', ['name' => $name,'password'=>$password]);
        $check= sizeof($results);
        if($check==1) {

            //[5.2a] once logged-in get the user's tasks to disply
            $tasks = DB::select('select * from tasks where user = :name ', ['name' => $name]);
            $data=[
              'name' => $name,
                'tasks' =>$tasks

            ];
            return view('pages/user')->with($data);
        }

        else{
            $message="No such user";
            return view('pages/login')->with('message',$message);
        }


    }

    //[5.1c]
public function createTask(){
    $name = $_POST['name'];
    $task = $_POST['task'];
    DB::insert('insert into tasks (user, task) values (?, ?)', [$name, $task]);


    //[5.2c] after submitting a task when go back to the user.php view need to have the tasks again
    $tasks = DB::select('select * from tasks where user = :name ', ['name' => $name]);
    $data=[
        'name' => $name,
        'tasks' =>$tasks

    ];

    return view('pages/user')->with($data);
}








}
