@extends('admin.master')
@section('container')
    <h1 style="display: inline-block">Usuarios</h1>
    <a href="{{route('usuario.registrar')}}">
        <button class="btn bg-success text-white" style="margin-bottom: 12px"><i class="fa fa-plus"></i> Nuevo</button>
    </a>
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th scope="col">CI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach(getUsers() as $user)
        <tr>
            <th scope="row">{{$user->ci}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-user-tag"></i> Asignar Privilegios
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        {{csrf_field()}}

                        <form action="{{url('/usuariorol',$user->id)}}" method="PUT">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">

                                        <label for="exampleFormControlSelect1">Seleccionar Rol</label>
                                        <select name="rolId" class="form-control" id="exampleFormControlSelect1">
                                            <option>Seleccionar unar opcion</option>
                                            @foreach(getRoles() as $rol)
                                                <option value={{$rol->id}}>{{$rol->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Asignar Rol</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>







            </td>
        @endforeach
        </tr>


        </tbody>
    </table>

@endsection
