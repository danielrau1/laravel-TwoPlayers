<h1>Login</h1>

@if($message!="")
    <p><?php echo $message ;?></p>
@endif

                                    {{--[4]--}}
{{ Form::open(['action'=>'PagesController@loginUser','method'=>'post'])}}
{{Form::label('name','Name')}}
{{Form::text('name')}}
<br>
{{Form::label('password','Password')}}

{{Form::text('password','')}}

{{Form::submit('Submit')}}
{{ Form::close()}}
