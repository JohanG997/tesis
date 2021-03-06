@extends('layouts.master')
@section('title', 'Creación de pacientes')
@section('content')
<br><br><br><br>
<center>
<!-- Material form register -->
<div class="container"><div class="card">

    <!--<h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>-->
    <h5 class="card-header black-text text-center py-4">
        <strong> Registro de pacientes</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        {!! Form::open(['route' => 'patients.store', 'method' => 'POST', 'class' => 'text-center','id'=>'form-userreg']) !!}
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        {!! Form::text('name', null, ['id' => 'materialRegisterFormName', 'class' => 'form-control', 'required']) !!}
                        <label for="materialRegisterFormName">Nombres</label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        {!! Form::text('last_name', null, ['id' => 'materialRegisterFormLastName', 'class' => 'form-control', 'required']) !!}
                        <label for="materialRegisterFormLastName">Apellidos</label>
                    </div>
                </div>
            </div>

            <div class="md-form">
                <span>Tipo de identificacion</span>
                {!! Form::select('identification_type', ['id_card' => 'Cédula', 'passport' => 'Pasaporte'], null,  
                    ['class' => 'mdb-select']) !!}
            </div>

 
                <div class="md-form">
                    <div class="md-form mt-0" >
                        {!! Form::text('identification', null, ['id' => 'identification', 'class' => 'form-control']) !!}
                        <label for="identification">Número de identificación</label>
                    </div>
                </div>

            <div class="md-form">
                <div class="md-form mt-0" >
                    {!! Form::date('birth', null, ['id' => 'birth', 'class' => 'form-control']) !!}
                    <label for="birth">Fecha de nacimiento</label>
                </div>
            </div>

            <div class="md-form">
                <div class="md-form mt-0" >
                    {!! Form::text('age', null, ['id' => 'age', 'class' => 'form-control']) !!}
                    <label for="age">Edad</label>
                </div>
            </div>

            <div class="md-form">
                <span>Sexo</span>
                {!! Form::select('sex', ['male' => 'Hombre', 'female' => 'Mujer', 'other'=>'Otro'], null,  
                    ['class' => 'mdb-select']) !!}
            </div>

            <div class="md-form">
                <div class="md-form mt-0" >
                    {!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control']) !!}
                    <label for="phone">Teléfono</label>
                </div>
            </div>
        
            <!-- E-mail -->
            <div class="md-form mt-0">
                {!! Form::email('email', null, ['id' => 'materialRegisterFormEmail', 'class' => 'form-control', 'required']) !!}
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <br>

            <!-- Sign up button -->
            <center>
            {!! Form::submit('Registrar', ['class' => 'btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0', 'style' => 'width:170px']) !!}
            </center>




            <hr>
    </form>
        <!-- Form -->

    </div>

</div>
</div>

<!-- Material form register -->
</center>




@endsection

