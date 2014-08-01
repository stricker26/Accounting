<!DOCTYPE html>
<html>
<head>
	<title>Register | Accounting</title>
</head>
<body>
{{ HTML::ul($errors->all()) }}	
<?php if(Session::has('flash_notice')): ?>
<p><?php echo Session::get('flash_notice') ?></p>
<?php endif; ?>	
{{ Form::open(array('url' => 'register')) }}

{{ Form::label('name', 'Name') }}
{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
<br>
{{ Form::label('email', 'Email') }}
{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
<br>
{{ Form::label('contact', 'Contact Number') }}
{{ Form::text('contact', Input::old('contact'), array('class' => 'form-control')) }}
<br>
{{ Form::label('department', 'Department') }}
{{ Form::select('department', Department::Select('Select Department'), '', array()) }}
<br>
{{ Form::label('position', 'Position') }}
{{ Form::text('position', Input::old('position'), array('class' => 'form-control')) }}

<hr />
<h1>Account</h1>

{{ Form::label('username', 'Username') }}
{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
<br>
{{ Form::label('password', 'Password') }}
{{ Form::password('password', Input::old('password'), array('class' => 'form-control')) }}
<br>
{{ Form::submit('Register', array('btn btn-primary')) }}

{{ Form::close() }}
</body>
</html>
