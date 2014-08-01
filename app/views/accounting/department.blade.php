<!DOCTYPE html>
<html>
<head>
	<title>Add Department | Accounting</title>
</head>
<body>
{{ HTML::ul($errors->all()) }}

<?php if(Session::has('flash_notice')): ?>
<p><?php echo Session::get('flash_notice') ?></p>
<?php endif; ?>	

{{ Form::open(array('action' => 'RegisterController@storeDepartment')) }}

{{ Form::label('department', 'Department') }}
{{ Form::text('department', Input::old('department'), array('class' => 'form-control')) }}

{{ Form::submit('Add Department', array('class' => 'form-control')) }}

{{ Form::close() }}

</body>
</html>