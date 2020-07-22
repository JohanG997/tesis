@extends('layouts.master')
@section('title', 'Modificación de resultado')
@section('content')
<br><br><br><br>
<center>
<!-- Material form register -->
<div class="container"><div class="card">

    <!--<h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>-->
    <h5 class="card-header black-text text-center py-4">
        <strong> Modificación de resultado</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        {{--comments
        !! Form::open(['route' => 'results.store', 'method' => 'POST', 'class' => 'text-center','id'=>'form-userreg']) !!}
        --}}
        <form action="">

            <div class="md-form">
                <div class="md-form mt-0" >
                    {!! Form::date('date', "2019-01-20", ['id' => 'birth', 'class' => 'form-control']) !!}
                    <label for="birth">Fecha de ...</label>
                </div>
            </div>

            <div class="md-form">
                <span>Paciente al que pertenece</span>
                {!! Form::select('identification_type', 
                    $patients->pluck('name_and_identification', 'id'),
                    null,
                    ['class' => 'mdb-select', 'searchable' =>'Buscar paciente']
                ) !!}
            </div>

            <span>Resultado</span>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupDoc">Documento</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="fileDoc" class="custom-file-input" id="docFile" onchange="vistaPreviaDoc(this)"
                            aria-describedby="inputGroupDoc" accept="application/pdf">
                            <label class="custom-file-label" id="txtDoc" for="docFile">Seleccione Documento</label>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm">
                        <div align="center" class='vistaDocNuevo'></div>
                    </div>
                </div>

            <br>

            <!-- Sign up button -->
            <center>
            {!! Form::submit('Actualizar', ['class' => 'btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0', 'style' => 'width:170px']) !!}
            </center>




            <hr>
    </form>
        <!-- Form -->

    </div>

</div>
</div>

<!-- Material form register -->
</center>


<script>
function vistaPreviaDoc(input) {
        var fileName = input.files[0].name;
        var ext = fileName.split('.');
        ext = ext[ext.length-1];
        var comprobacion = false
        switch (ext) {
            case 'pdf':
                comprobacion = true
            break;
            default:
                alert('Solo se aceptan archivos pdf');
                input.files[0].name = '';
                input.value = ''; // reset del valor
                comprobacion = false
            break;
        }
        if (comprobacion && input.files && input.files[0]) {  // si hay archivos seleccionados
            let lectorDeArchivo = new FileReader()
            lectorDeArchivo.onload = function(e){
                document.querySelector('.vistaDocNuevo').innerHTML =
                `<embed width='300px' height='400px'
                class='' src="${e.target.result}#toolbar=1&navpanes=1&scrollbar=1"
                type="application/pdf">`
            }
            lectorDeArchivo.readAsDataURL(input.files[0])
        }
    }
</script>

@endsection


