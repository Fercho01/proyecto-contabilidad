@extends('admin.master')
@section('container')
    <h1 style="display: inline-block">Pago Ventas</h1>
    <a href="{{route('pagoventa.registrar')}}">
        <button class="btn bg-success text-white" style="margin-bottom: 12px"><i class="fa fa-plus"></i> Nuevo</button>
    </a>
    <table class="table table-condensed table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Monto</th>
                <th scope="col">Factura Venta</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach (getPagoVenta() as $pagoventa)
                <tr>
                    <th scope="row">{{ $pagoventa->id }}</th>
                    <td>{{ $pagoventa->created_at }}</td>
                    <td>{{ $pagoventa->monto }}</td>
                    <td>{{ $pagoventa->facturaVenta->descripcion }}</td>
                    <td>
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Actualizar
                        </button> --}}

                        <!-- Modal -->
                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                {{ csrf_field() }}

                                <form action="{{ url('/asientoactualizar', $asiento->id) }}" method="PUT">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Actualizar </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Moneda</label>
                                                <input name="moneda" value="{{ $asiento->moneda }}"
                                                    type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Ingresar la descripción">
                                            </div>
                                            <div class="form-group">
                                                <label for="libroDiario_id">Libro Diario</label>
                                                <select name="libroDiario_id" id="libroDiario_id" class="form-control"
                                                    data-live-search="true" data-size="3" data-dropup-auto="false">
                                                    <option value="0" disabled>Seleccione:</option>
                                                    @foreach (getLibrosDiarios() as $libroDiario)
                                                        <option value="{{ $libroDiario->id }}" @if($libroDiario->nombre == $asiento->libroDiario->nombre) selected @endif>{{ $libroDiario->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Actualizar Asiento</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div> --}}

                        <!-- Eliminar-->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{ $pagoventa->id }}">
                            <i class="far fa-trash-alt"></i> Eliminar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete-{{ $pagoventa->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Eliminar Pago Venta</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('/pagoventaeliminar', $pagoventa->id) }}" method="put">

                                        <div class="modal-body">

                                            <label for="">Esta seguro que desea eliminar el pago venta({{ $pagoventa->id }})</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Eliminar</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
