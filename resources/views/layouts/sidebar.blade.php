<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">Stisla</a>
    </div>

    <ul class="sidebar-menu">
        @section('sidebar')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item ">
                <a href="{{route('home')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            {{-- Manage User List --}}

            @can('index-user')
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>User List</span>
                    </a>
                </li>

            @endcan
        @show
    </ul>

</aside>
