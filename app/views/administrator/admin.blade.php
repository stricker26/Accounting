<!DOCTYPE html>
<html>
<head>
	<title>Administration | rjc.com.ph</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>	
<body>
	{{ HTML::ul($errors->all()) }}	
	{{ Form::open(array('url' => 'administrator')) }}

	<div class="form-group">
		{{ Form::label('menu_title', 'Menu Title') }}
		{{ Form::text('menu_title', Input::old('menu_title'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('data_desc', 'Data Description') }}
		{{ Form::text('data_desc', Input::old('data_desc'), array('class' => 'form-control')) }}
	</div>	

	<div class="form-group">
		{{ Form::label('icon', 'Select Icon') }}
		{{ Form::select('icon', array(
			'home' => 'home',
			'about' => 'about'),
			Input::old('icon'), 
			array('class' => 'form-control')) }}
	</div>	

	<div class="form-group">
		{{ Form::label('page', 'Assign Page') }}
		{{ Form::select('page', array(
			'home' => 'home',
			'about' => array('our process' => 'our process','our clients' => 'our clients', 'awards' => 'awards'),
			'works' => 'works',
			'services' => 'services',
			'career' => 'career',
			'contact' => 'contact'), 
			Input::old('page'), 
			array('class' => 'form-control')) }}
	</div>	

	<div class="form-group">
		{{ Form::submit('Add Menu', array('class' => 'btn btn-primary')) }}
	</div>	

	{{ Form::close() }}
</body>	
</html>
