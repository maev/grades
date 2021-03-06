@extends('layouts.user')
@section('main')

<h1>Lista Maestros</h1>
<h3 align = right> <b> {{HTML::link('dashboard', 'Dashboard') }}</b>  </h3>
<p>{{ link_to_route('users.create', 'Agregar Maestro') }}</p>


@if ($users->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
		<th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
       <!-- <th>Password</th> --> 
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
		    <td>{{ $user->teacher->firstName_teachers }}</td>
                    <td>{{ $user->teacher->lastName_teachers }}</td>
                    <td>{{ $user->username }}</td>
         
                    <td>{{ link_to_route('users.edit', 'Editar',
 array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('users.destroy', $user->id))) }}                       
                            {{ Form::submit('Activar/Inactivar', array('class'
 => 'btn btn-default')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    No hay maestros registrados
@endif

@stop














         





















