<!DOCTYPE html>
<html>
<head>
	<title>Login | Accounting</title>
</head>
<body>
{{ Form::open(array('url' => 'login')) }}

{{ Form::label('username', 'Username') }}
{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}

{{ Form::label('password', 'Password') }}
{{ Form::password('password', Input::old('password'), array('class' => 'form-control')) }}

{{ Form::submit('Login') }}

{{ Form::close() }}
 
</body>
</html>