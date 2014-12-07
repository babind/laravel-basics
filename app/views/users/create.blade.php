@extends('layouts.default')

@section('content')

<h1>Create New User</h1>

{{ Form::open(['route'=>'users.store']) }}
	
	<div>
		{{ Form::label('username','Username:')	}}
		<!-- {{	Form::input('text','username')	}}  -->
		{{ Form::text('username')	}}
		{{ $errors->first('username')
		}}
	</div>

	<div>
		{{ Form::label('password','Password:')	}}
		<!-- {{	Form::input('text','username')	}}  -->
		{{ Form::password('password')	}}
		{{ $errors->first('password')	}}
	</div>

	<div>{{	Form::submit('create User')	}}</div>

{{ Form::close() }}

@stop