<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('eventos.index') }}" class="brand-link">
        <img src="{{ asset('images/Logo_turismo.jpeg') }}"
             alt="Touriism"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
