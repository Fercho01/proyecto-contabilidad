@extends('admin.master')
@section('container')
    <h1 style="display: inline-block">Factura Venta</h1>
    <a href="{{route('facturaventa.registrar')}}">
        <button class="btn bg-success text-white" style="margin-bottom: 12px"><i class="fa fa-plus"></i> Nuevo</button>
    </a>
    <table class="table table-condensed table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descripción</th>
                <th scope="col">Monto</th>
                <th scope="col">Asiento</th>
                <th scope="col">Pedido Venta</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php //; ?>
            @foreach (getFacturaVenta() as $factura)
                <tr>
                    <th scope="row">{{ $factura->id }}</th>
                    <td>{{ $factura->created_at }}</td>
                    <td>{{ $factura->descripcion }}</td>
                    <td>{{ $factura->monto }}</td>
                    <td>{{ $factura->asiento->id }}</td>
                    <td>{{ $factura->pedidoVenta->descripcion }}</td>
                    <td>
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-edit"></i> Actualizar
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
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{ $factura->id }}">
                            <i class="far fa-trash-alt"></i> Eliminar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete-{{ $factura->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Eliminar Factura</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('/facturaventaeliminar', $factura->id) }}" method="put">

                                        <div class="modal-body">

                                            <label for="">Esta seguro que desea eliminar la factura({{ $factura->id }})</label>
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
