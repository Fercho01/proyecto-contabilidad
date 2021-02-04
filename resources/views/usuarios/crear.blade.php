@extends('admin.master')
@section('container')
    <h1>Registra Usuario</h1>

    <form action="{{url('/usuariocrear')}}" method="post">
    {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputPassword1">Carnet de Identidad</label>
            <input name="ci" type="number" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el Carnet de Identidad">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar el nombre">
        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Correo Electronico</label>
            <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el nombre de la empresa">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa la contraseña">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirmar Contraseña</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder="Repetir contraseña">
        </div>
        <a href="{{ route('usuario.index') }}" class="btn btn-info text-white"><i class="fas fa-arrow-left"></i> Retornar</a>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Registrar Usuario</button>
    </form>


@endsection
