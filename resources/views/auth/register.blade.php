@extends('main')
@section('title', '| Register')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!!Form::open()!!}
				{{Form::label('name','Name: ')}}
				{{ Form::text('name', null, array('class' => 'form-control')) }}
				{{Form::label('email','Email: ')}}
				{{ Form::email('email', null, ['class' => 'form-control']) }}
				{{Form::label('password','Password: ')}}
				{{ Form::password('password', array('class' => 'form-control')) }}
				{{Form::label('password_confirmation','Conformation Password: ')}}
				{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
				<br>
				<br>
				{{Form::submit('Register',['class' => 'btn btn-primary btn-block'])}}
			{!!Form::close()!!}

	
		</div>
		
	</div>
@endsection