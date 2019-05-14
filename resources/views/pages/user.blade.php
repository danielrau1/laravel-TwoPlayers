<h1>User Page</h1>


{{--[4.1a] --}}
{{--Hi {{$name}}--}}

Hi <?php echo $name; ?>

<h4>Create Task</h4>


{{--{{ Form::open(['action'=>'PagesController@createTask','method'=>'post'])}}--}}
{{--{{Form::label('name','Name')}}--}}
{{--{{Form::text('name', {{$name}})}}--}}
{{--<br>--}}
{{--{{Form::label('task','Task')}}--}}

{{--{{Form::textarea('task','')}}--}}

{{--{{Form::submit('Submit')}}--}}
{{--{{ Form::close()}}--}}


{{--[5.1a]--}}
<form method="post" action="user">
    <input type="text" name="name" value="<?php echo $name; ?>" ><br>
    <input type="text" name="task" >
    <input type="hidden" name="_token" value="{{csrf_token()}}" >
<input type="submit" >
</form>



{{--[5.2b]--}}
@if(count($tasks)>0)
    <ul>
    @foreach($tasks as $task)
            <li>{{$task->task}}</li>
    @endforeach
    </ul>
        @else
    <p>no posts found</p>

@endif









