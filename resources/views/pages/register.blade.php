<h1>Register</h1>

                                         {{--[1]--}}
{{ Form::open(['action'=>'PagesController@createUser','method'=>'post'])}}
{{Form::label('name','Name')}}
{{Form::text('name')}}
<br>
{{Form::label('password','Password')}}

{{Form::text('password','')}}

{{Form::submit('Submit')}}
{{ Form::close()}}



