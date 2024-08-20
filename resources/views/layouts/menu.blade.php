<!-- need to remove -->
{{-- @can('Administrador configuracion')
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inicio</p>
    </a>
</li>
@endcan --}}

<li class="nav-item">
    <a href="{{ route('eventos.index') }}" class="nav-link {{ Request::is('eventos*') ? 'active' : '' }}">
        <i class="nav-icon fas"></i>
        <p>Eventos</p>
    </a>
</li>

@can('Administrador configuracion')
    <li class="nav-item">
        <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
            <i class="nav-icon fas"></i>
            <p>Roles</p>
        </a>
    </li>
@endcan

@can('Administrador configuracion')
    <li class="nav-item">
        <a href="{{ route('permisos.index') }}" class="nav-link {{ Request::is('permisos*') ? 'active' : '' }}">
            <i class="nav-icon fas"></i>
            <p>Permisos</p>
        </a>
    </li>
@endcan

@can('Administrador configuracion')
    <li class="nav-item">
        <a href="{{ route('asignar.index') }}" class="nav-link {{ Request::is('asignar*') ? 'active' : '' }}">
            <i class="nav-icon fas"></i>
            <p>Asignar Roles</p>
        </a>
    </li>
@endcan

@can('Crear categoria')
    <li class="nav-item">
        <a href="{{ route('categorias.index') }}" class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
            <i class="nav-icon fas"></i>
            <p>Categorias</p>
        </a>
    </li>
@endcan


@can('Administrador configuracion')
<li class="nav-item">
    <a href="{{ route('auditoria.index') }}" class="nav-link {{ Request::is('auditoria*') ? 'active' : '' }}">
        <i class="nav-icon fas"></i>
        <p>Auditorias</p>
    </a>
</li>
@endcan