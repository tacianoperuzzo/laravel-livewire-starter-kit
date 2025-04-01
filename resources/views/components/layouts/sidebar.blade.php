<div class="d-flex flex-column h-100">
    <div class="px-4 py-2 border-bottom">
        <a href="{{ route('home') }}" class="text-decoration-none text-dark d-flex align-items-center">
            <i class="bi bi-columns-gap fs-4 me-2"></i>
            <span class="fw-semibold fs-6">{{ config('app.name') }}</span>
        </a>
    </div>

    <div class="p-3 flex-grow-1 sidebar">
        <ul class="nav flex-column gap-1">

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    wire:navigate href="{{ route('dashboard') }}">
                    <i class="bi bi-house"></i>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('teste') ? 'active' : '' }}"
                    wire:navigate href="{{ route('teste') }}">
                    <i class="fas fa-umbrella-beach"></i>Teste
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link collapsed d-flex align-items-center" data-bs-toggle="collapse"
                    data-bs-target="#submenu-pages">
                    <i class="bi bi-house"></i>
                    <span class="me-auto">Menu level</span>
                    <i class="bi bi-chevron-right ps-1"></i>
                </a>
                <div class="multi-level collapse" role="list" id="submenu-pages" aria-expanded="false">
                    <ul class="flex-column nav sub-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="bi bi-dot"></i>
                                <span class="sidebar-text">Submenu 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="bi bi-dot"></i>
                                <span class="sidebar-text">Submenu 2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="bi bi-dot"></i>
                                <span class="sidebar-text">Submenu 3</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div class="p-3 border-top">
        @include('partials.user-menu')
    </div>
</div>
