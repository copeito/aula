@extends('layouts.layout')
@section('content')
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Error!</strong> Revise los campos obligatorios.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<form method="POST" action="{{ route('student.store') }}" role="form">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name"
            aria-describedby="nameHelpBlock" maxlength="191" required
            onchange="this.setCustomValidity('')"
            oninvalid="this.setCustomValidity('Pero pon algo ahí!')">
        <small id="nameHelpBlock" class="form-text text-muted">
            Campo obligatorio
        </small>
    </div>
    <div class="form-group">
        <label for="surnames">Apellidos:</label>
        <input type="text" class="form-control" name="surnames" id="surnames" maxlength="191">
    </div>
    <div class="form-group">
        <label for="phone">Telefono:</label>
        <input type="tel" class="form-control" id="phone" name="phone" maxlength="191">
    </div>
    <div class="form-group">
        <label for="address">Dirección postal:</label>
        <input type="text" class="form-control" id="address" name="address" maxlength="191">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" maxlength="191"
            oninvalid="this.setCustomValidity('Email no válido')"
            aria-describedby="emailHelpBlock">
        <small id="emailHelpBlock" class="form-text text-muted">
            Se non queres poñer nada non poñas nada pero non me toque-lo carallo!
        </small>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
