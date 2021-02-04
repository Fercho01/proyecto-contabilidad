@extends('admin.master')
@section('container')
    <h1 style="display: inline-block">Libros Mayores</h1>
    <a href="{{route('libromayor.registrar')}}">
        <button class="btn bg-success text-white" style="margin-bottom: 12px"><i class="fa fa-plus"></i> Nuevo</button>
    </a>
    <table class="table table-condensed table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Id</th>
                <th scope="col">Descripción</th>
                <th scope="col">Libro Diario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach (getLibrosMayores() as $libromayor)
                <tr>
                    <th scope="row">{{ $libromayor->id }}</th>
                    <td>{{ $libromayor->descripcion }}</td>
                    <td>{{ $libromayor->librodiario->id }}</td>
                    <td>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-edit"></i> Actualizar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                {{ csrf_field() }}

                                <form action="{{ url('/libromayoractualizar', $libromayor->id) }}" method="PUT">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Actualizar </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Descripción</label>
                                                <input name="descripcion" value="{{ $libromayor->descripcion }}"
                                                    type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Ingresar la descripción">
                                            </div>
                                            <div class="form-group">
                                                <label for="librodiario_id">Empresa</label>
                                                <select name="librodiario_id" id="librodiario_id" class="form-control"
                                                    data-live-search="true" data-size="3" data-dropup-auto="false">
                                                    <option value="0" disabled>Seleccione:</option>
                                                    @foreach (getLibrosDiarios() as $librodiario)
                                                        <option value="{{ $librodiario->id }}" @if($librodiario->id==$libromayor->librodiario->id) selected @endif>{{ $librodiario->id }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Actualizar Libro Mayor</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>


                        <!-- Eliminar-->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">
                            <i class="far fa-trash-alt"></i> Eliminar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar libro mayor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('/libromayoreliminar', $libromayor->id) }}" method="put">

                                        <div class="modal-body">

                                            <label for="">Esta seguro que desea eliminar el libro mayor
                                                ({{ $libromayor->id }})</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Eliminar</button>

                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>

                </tr>
            @endforeach



        </tbody>
    </table>

@endsection
