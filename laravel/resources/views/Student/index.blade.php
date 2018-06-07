@extends('layouts.layout')
@section('content')
@if($students->count())
@foreach($students as $student)
        <div class="row">
            {{$student->nombre}}
        </div>
@endforeach
@else
    <div class="row">
        Non hai nada
    </div>
@endif

@endsection
