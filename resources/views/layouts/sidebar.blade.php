<nav class="sidebar bg-dark" style="background: #000 !important">
    <ul class="list-unstyled">
        @if (Auth::check() && Auth::user()->rolId === 1)
            <li>
                <a href="#submenu1" data-toggle="collapse"><i class="fas fa-user-cog"></i> Administración Empresa</a>
                <ul id="submenu1" class="list-unstyled collapse">
                    <li><a href="{{ route('usuario.index') }}" ><i class="far fa-circle"></i> Usuarios</a></li>
                    <!-- Empresa -->
                    <li>
                        <a href="#"><i class="far fa-circle"></i> Empresa</a>
                    </li>
                </ul>
            </li>
        @endif

        <li>
            <a href="#submenu2" data-toggle="collapse"><i class="fas fa-chart-line"></i> Administración Ventas</a>
            <ul id="submenu2" class="list-unstyled collapse">
                <li><a href="{{ route('facturaventa.index') }}"><i class="far fa-circle"></i> Factura Venta</a></li>
                <li><a href="{{ route('pedidoventa.index') }}"><i class="far fa-circle"></i> Pedido Venta</a></li>
                <li><a href="{{ route('cliente.index') }}"><i class="far fa-circle"></i> Cliente</a></li>
                <li><a href="{{ route('pagoventa.index') }}"><i class="far fa-circle"></i> Pago Venta</a></li>
            </ul>
        </li>

        <li>
            <a href="#submenu3" data-toggle="collapse"><i class="fas fa-shopping-cart"></i> Administración Compras</a>
            <ul id="submenu3" class="list-unstyled collapse">
                <li><a href="{{ route('facturacompra.index') }}"><i class="far fa-circle"></i>  Factura Compra</a></li>
                <li><a href="{{ route('pagocompra.index') }}"><i class="far fa-circle"></i> Pago Compra</a></li>
                <li><a href="{{ route('proveedor.index') }}"><i class="far fa-circle"></i> Proveedores</a></li>
                <li><a href="{{ route('pedidoCompras.index') }}"><i class="far fa-circle"></i> Pedido Compras</a></li>
            </ul>
        </li>

        @if (Auth::check() && Auth::user()->rolId === 1)

            <li>
                <a href="#submenu4" data-toggle="collapse"><i class="fa fa-file-alt"></i> Administración Informe</a>
                <ul id="submenu4" class="list-unstyled collapse">
                    <li><a href="{{ route('asiento.index') }}"><i class="far fa-circle"></i> Gestionar Asiento </a></li>
                    <li><a href="{{ route('librodiario.index') }}"><i class="far fa-circle"></i> Libro Diario</a></li>
                    <li><a href="{{ route('libromayor.index') }}"><i class="far fa-circle"></i> Libro Mayor</a></li>

                </ul>
            </li>
        @endif

    </ul>
</nav>
