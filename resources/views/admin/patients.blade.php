@extends('layouts.master')
@section('title', 'Pacientes')
@section('content')

<!--Main layout
include('elementos.slider')
-->

<br><br>
<!--Main layout-->
<main>
    <br><br>
    <div class="container">
        <!--Section: Main features & Quick Start-->
        <section>
        <center>


            <center>
                <br><h4>Administración: Pacientes</h4><br>
            </center>


            <a href="{{ url('/create-patient') }}" class="btn btn-success">
                <span>Crear Paciente</span>
            </a>
            <br>
            
            {{--comments
                {!! Form::open(['route' => 'admin-users.store', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}   
            --}}
            <form action="" method="GET" class="navbar-form pull-right">
                <div class="input-group">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar...', 'aria-describedby' => 'search']) !!}
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">
                            <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            {{--comments
                {!!  Form::close() !!}
            --}}
            </form>
            <br><br>
            <div class="table-responsive text-center">
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Tipo de identificación</th>
                            <th scope="col">Identificación</th>
                            <th scope="col">Fecha de nacimiento</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo electrónico</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                             @foreach($patients as $patient)
                                <tr
                                onmouseover="mostrar_acciones('btns-{{ $patient->id }}')"
                                onmouseout="ocultar_acciones('btns-{{ $patient->id }}')">
                                    <th scope="row">{{ $patient->id }}</th>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->last_name }}</td>
                                    <td>{{ $patient->identification_type }}</td>
                                    <td>{{ $patient->identification }}</td>
                                    <td>{{ $patient->birth }}</td>
                                    <td>{{ $patient->age }}</td>
                                    <td>{{ $patient->sex }}</td>
                                    <td>{{ $patient->phone }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>
                                    <div class="btn-group" id="btns-{{ $patient->id }}" style="visibility:hidden;">
                                            <a href="{{ route('patients.edit', $patient->id) }}" style="color:white;"
                                            class="btn btn-sm btn-outline-success btn-rounded material-tooltip-main"
                                            data-toggle="tooltip" data-placement="top" title="Modificar">
                                                <i style="font-size: 14px;" class="fa fa-edit"></i>
                                            </a>&nbsp
                                                <a href="{{ route('patients.destroy', $patient->id) }}" style="color:white;"
                                                class="btn btn-sm btn-outline-danger btn-rounded material-tooltip-main"
                                                data-toggle="modal" data-placement="top" title="Eliminar"
                                                data-target="#deleteUserModal" onclick="getDataModal('{{ route('patients.destroy', $patient->id) }}')">
                                                    <i style="font-size: 14px;" class="fa fa-remove"></i>
                                                </a>
                                       </div>
                                    </td>
                                </tr>
                                <!-- Modal para modificar -->
                                
                                @endforeach 
                        </tbody>
                    </table>
                    <br>
            </div>
    {{ $patients->links() }}


        </center>
        </section>
        <!--Section: Main features & Quick Start-->

        <hr class="my-5">


    </div>
</main>
<!--Main layout-->


<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:red; color:white;">
        <h5 class="modal-title" id="deleteModalLabel" style="font weight: bold">Confirmar eliminación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff; font-weight:bolder">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="margin-top:10px; color:red;" >
        Esta acción eliminará definitivamente el usuario
        ¿Está seguro?
        </p>
        <input type="hidden" id="urlDeleteUser" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" style="text-decoration: none;" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger btn" onclick="deleteUser()">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script>
function mostrar_acciones(idusuario){
    acciones = document.getElementById(idusuario)
    acciones.style.visibility = 'visible'
}

function ocultar_acciones(idusuario){
    acciones = document.getElementById(idusuario)
    acciones.style.visibility = 'hidden'
}

function getDataModal(url){
    $('#urlDeleteUser').val(url)
}

function deleteUser(){
    urlDelete = $('#urlDeleteUser').val()
    if(urlDelete && !(urlDelete.trim() === '') ){
        location.href = urlDelete
    }
    else{
        alert("Ocurrió un error al intentar eliminar este usuario")
    }
}
</script>

@endsection
