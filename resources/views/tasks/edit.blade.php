<h3>Edit Task</h3>


{{--[5.4b] the form that recieves the task and which will edit it --}}

@if(count($task)==1)

        @foreach($task as $t)
            <form method="post" action="tasks/editTask">
                <input type="text" name="id" value="{{$t->id}}" ><br>
                <input type="text" name="task" value="{{$t->task}}" ><br>

                <input type="hidden" name="_token" value="{{csrf_token()}}" >
                <input type="hidden" name="_method" value="GET" >

                <br><input type="submit" name="EDIT" >
            </form>
        @endforeach

@endif
