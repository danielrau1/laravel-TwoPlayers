<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class TasksController extends Controller
{               //[5.3c]
            public function editPage($id){
                $task_to_edit = DB::select('select * from tasks where id = :id ', ['id' => $id]);//[5.4a]
                //return $task_to_edit;

               return view('tasks/edit')->with('task',$task_to_edit);
            }

            //[5.4c]
            public function editTask(){
                $id = $_POST['id'];
                $task = $_POST['task'];

                 DB::update('update tasks set task =:task where id =:id', ['id' => $id,'task'=>$task]);

                 return view('pages/user');
            }
}
