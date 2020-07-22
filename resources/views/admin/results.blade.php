@extends('layouts.master')
@section('title', 'Resultados')
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
                <br><h4>Administración: Resultados</h4><br>
            </center>


            <a href="{{ url('/create-result') }}" class="btn btn-success">
                <span>Crear Resultado</span>
            </a>
            <br>
            </form>
            <br><br>
            <div class="table-responsive text-center">
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Código de orden</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Registrado por:</th>
                            <th scope="col">Paciente al que pertenece:</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($results as $result)
                            <tr onmouseover="mostrar_acciones('btns-{{ $result->id }}')"
                                onmouseout="ocultar_acciones('btns-{{ $result->id }}')">
                                <th scope="row">{{ $result->id }}</th>
                                <td>{{ $result->order_code }}</td>
                                <td>{{ $result->date }}</td>
                                <td>{{ $result->user->name }} {{$result->user->last_name}}</td>
                                <td>{{ $result->patient }}</td>
                                <td>
                                    <div class="btn-group" id="btns-{{ $result->id }}" style="visibility:hidden;">
                                            <a href="#" style="color:white;"
                                            class="btn btn-sm btn-outline-primary btn-rounded material-tooltip-main"
                                            data-toggle="tooltip" data-placement="top" title="Ver resultado">
                                                <i style="font-size: 14px;" class="fa fa-file-o"></i>
                                            </a>&nbsp
                                            <a href="/update-result" style="color:white;"
                                            class="btn btn-sm btn-outline-success btn-rounded material-tooltip-main"
                                            data-toggle="tooltip" data-placement="top" title="Modificar">
                                                <i style="font-size: 14px;" class="fa fa-edit"></i>
                                            </a>&nbsp
                                            <!--Con esto evitamos que el usuario se quiera eliminar a sí mismo-->
                                            <a href="#" style="color:white;"
                                            class="btn btn-sm btn-outline-danger btn-rounded material-tooltip-main"
                                            data-toggle="modal" data-placement="top" title="Eliminar"
                                            data-target="#deleteResultModal" onclick="">
                                                <i style="font-size: 14px;" class="fa fa-remove"></i>
                                            </a>
                                       </div>
                                    </td>
                            </tr>
                        @endforeach 
                        </tbody>
                    </table>
                    <br>
            </div>
        {{ $results ?? ''->links() }}
        </center>
        </section>
        <!--Section: Main features & Quick Start-->

        <hr class="my-5">


    </div>
</main>
<!--Main layout-->


<div class="modal fade" id="deleteResultModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
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
        Esta acción eliminará definitivamente el resultado
        ¿Está seguro?
        </p>
        <input type="hidden" id="urlDeleteResult" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" style="text-decoration: none;" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger btn" onclick="deleteResult()">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script>
function mostrar_acciones(idresult){
    acciones = document.getElementById(idresult)
    acciones.style.visibility = 'visible'
}

function ocultar_acciones(idresult){
    acciones = document.getElementById(idresult)
    acciones.style.visibility = 'hidden'
}

function getDataModal(url){
    $('#urlDeleteResult').val(url)
}

function deleteResult(){
    urlDelete = $('#urlDeleteResult').val()
    if(urlDelete && !(urlDelete.trim() === '') ){
        location.href = urlDelete
    }
    else{
        alert("Ocurrió un error al intentar eliminar este resultado del paciente")
    }
}
</script>

@endsection
