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
<form action="{{ route('student.store') }}">
    {{ csrf_field() }}
    <input id="name"
        label="Nombre:"
        help="Campo obligatorio"
        msgOnInvalid="Pero pon algo ahí!"
        required>

    <input id="surnames" label="Apellidos:">

    <input id="phone" label="Telefono:" type="tel" >

    <input id="address" label="Dirección postal:">

    <input id="email"
        label="Email:"
        help="Se non queres poñer nada non poñas nada pero non me toque-lo carallo!"
        type="email"
        msgOnInvalid="Email no válido"
    >

    <button>Submit</button>
</form>
@endsection
