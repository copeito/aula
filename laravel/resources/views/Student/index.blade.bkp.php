@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista alumnos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('student.create') }}" class="btn btn-info" >Añadir alumno</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellidos</th>
               <th>Teléfono</th>
               <th>Dirección postal</th>
               <th>Email</th>
             </thead>
             <tbody>
              @if($students->count())
              @foreach($students as $student)
              <tr>
                <td>{{$student->nombre}}</td>
                <td>{{$student->surnames}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->email}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('StudentController@edit', $student->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('StudentController@destroy', $student->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
