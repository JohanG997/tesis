@extends('layouts.master')
@section('title', 'Creación de usuarios')
@section('content')
<br><br><br><br>
<center>
<!-- Material form register -->
<div class="container"><div class="card">

    <!--<h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>-->
    <h5 class="card-header black-text text-center py-4">
        <strong> Registro de usuarios</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        {!! Form::open(['route' => 'users.store', 'method' => 'POST', 'class' => 'text-center','id'=>'form-userreg']) !!}
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

            <!-- E-mail -->
            <div class="md-form mt-0">
                {!! Form::email('email', null, ['id' => 'materialRegisterFormEmail', 'class' => 'form-control', 'required']) !!}
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                {!! Form::password('password', ['id' => 'materialRegisterFormPassword', 'aria-describedby' => 'materialRegisterFormPasswordHelpBlock', 'class' => 'form-control', 'required']) !!}
                <label for="materialRegisterFormPassword">Contraseña</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                </small>
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

