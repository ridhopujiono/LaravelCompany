<li class="nav-item {{ Request::is('ceos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('ceos.index') }}">
        <i class="nav-icon icon-user-following"></i>
        <span>Manajemen CEO</span>
    </a>
</li>
<li class="nav-item {{ Request::is('empolyees*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empolyees.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>Manajemen Employee</span>
    </a>
</li>
