@extends('admin.master')
@section('container')
    <h1>Registrar Pedido Compra</h1>

    <form action="{{ route('pedidoCompras.crear') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input name="descripcion" type="text" class="form-control" id="descripcion" aria-describedby="emailHelp" placeholder="Ingresar la descripción...">
        </div>
        {{-- <div class="form-group">
            <label for="exampleInputPassword1">Empresa</label>
            <input name="empresa" type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el nombre de la empresa">
            @error('empresa')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> --}}


        <div class="form-group">
            <label for="id_proveedor">Proveedores:</label>
            <select name="id_proveedor" id="id_proveedor"  class="form-control selectpicker" data-live-search="true" data-size="3" data-dropup-auto="false">
                <option value="0">Seleccione:</option>
                @foreach (getProveedores() as $proveedor)
                    <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('pedidoCompras.index') }}" class="btn btn-info text-white"><i class="fas fa-arrow-left"></i> Retornar</a>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Registrar Pedido Compra</button>
    </form>


@endsection
