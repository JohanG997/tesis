@extends('layouts.master')
@section('title', 'Usuarios')
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
                <br><h4>Administración: Usuarios</h4><br>
            </center>


            <a href="{{ url('/create-user') }}" class="btn btn-success">
                <span>Crear Usuario</span>
            </a>
            <br>
            </form>
            <br><br>
            <div class="table-responsive text-center">
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo electrónico</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr onmouseover="mostrar_acciones('btns-{{ $user->id }}')"
                                onmouseout="ocultar_acciones('btns-{{ $user->id }}')">
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="btn-group" id="btns-{{ $user->id }}" style="visibility:hidden;">
                                            <a href="{{ route('users.edit', $user->id) }}" style="color:white;"
                                            class="btn btn-sm btn-outline-success btn-rounded material-tooltip-main"
                                            data-toggle="tooltip" data-placement="top" title="Modificar">
                                                <i style="font-size: 14px;" class="fa fa-edit"></i>
                                            </a>&nbsp
                                            <!--Con esto evitamos que el usuario se quiera eliminar a sí mismo-->
                                            @if (!(Auth::user()->name === $user->name && Auth::user()->email === $user->email))
                                                <a href="{{ route('users.destroy', $user->id) }}" style="color:white;"
                                                class="btn btn-sm btn-outline-danger btn-rounded material-tooltip-main"
                                                data-toggle="modal" data-placement="top" title="Eliminar"
                                                data-target="#deleteUserModal" onclick="getDataModal('{{ route('users.destroy', $user->id) }}')">
                                                    <i style="font-size: 14px;" class="fa fa-remove"></i>
                                                </a>
                                            @endif
                                       </div>
                                    </td>
                            </tr>
                        @endforeach 
                        </tbody>
                    </table>
                    <br>
            </div>
        {{ $users->links() }}
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
