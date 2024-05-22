<!-- Nav Item - Dashboard -->
{{-- <li class="sidebar-header">
    Users
</li>

<li
    class="sidebar-item {{ request()->route()->getName() =='users.index' ??request()->route()->getName() == 'users.show' ||request()->route()->getName() == 'users.edit'? 'active': '' }}">
    <a data-bs-target="#users" data-bs-toggle="collapse" class="sidebar-link collapsed">
        <i class="align-middle me-2 fas fa-fw fa-users"></i> <span class="align-middle">Users</span>
    </a>
    <ul id="users" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
        <li
            class="sidebar-item  {{ request()->route()->getName() == 'users.index' ||request()->route()->getName() == 'users.show' ||request()->route()->getName() == 'users.edit'? 'active': '' }}">
            <a class="sidebar-link" href="{{ route('users.index') }}">
                <i class="align-middle me-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">All</span>
            </a>
        </li>
    </ul>
</li> --}}
<!-- Nav Item - Dashboard -->
<li class="sidebar-header">
    Debtors
</li>

<li
    class="sidebar-item {{ request()->route()->getName() =='debtors.index' ??request()->route()->getName() == 'debtors.show' ||request()->route()->getName() == 'users.edit'? 'active': '' }}">
    <a data-bs-target="#debtors" data-bs-toggle="collapse" class="sidebar-link collapsed">
        <i class="align-middle me-2 fas fa-fw fa-user-tie"></i> <span class="align-middle">Debtors</span>
    </a>
    <ul id="debtors" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
        <li class="sidebar-item  {{ request()->route()->getName() == 'debtors.create' }}">
            <a class="sidebar-link" href="{{ route('debtors.create') }}">
                <i class="align-middle me-2 fas fa-fw fa-plus"></i> <span class="align-middle">Create</span>
            </a>
        </li>
        <li
            class="sidebar-item  {{ request()->route()->getName() == 'debtors.index' ||request()->route()->getName() == 'debtors.show' ||request()->route()->getName() == 'debtors.edit'? 'active': '' }}">
            <a class="sidebar-link" href="{{ route('debtors.index') }}">
                <i class="align-middle me-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">All</span>
            </a>
        </li>

        <li
            class="sidebar-item  {{ request()->route()->getName() == 'debtors.index' ||request()->route()->getName() == 'debtors.show' ||request()->route()->getName() == 'debtors.edit'? 'active': '' }}">
            <a class="sidebar-link" href="{{ route('debtors.ticklers.index') }}">
                <i class="align-middle me-2 fas fa-fw fa-bell"></i> <span class="align-middle">Ticklers</span>
            </a>
        </li>
    </ul>
</li>

<li
    class="sidebar-item {{ request()->route()->getName() =='clients.index' ??request()->route()->getName() == 'clients.show' ||request()->route()->getName() == 'clients.edit'? 'active': '' }}">
    <a data-bs-target="#clients" data-bs-toggle="collapse" class="sidebar-link collapsed">
        <i class="align-middle me-2 fas fa-fw fa-user-tie"></i> <span class="align-middle">Clients</span>
    </a>
    <ul id="clients" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

        <li class="sidebar-item  {{ request()->route()->getName() == 'debtors.create' }}">
            <a class="sidebar-link" href="{{ route('clients.create') }}">
                <i class="align-middle me-2 fas fa-fw fa-plus"></i> <span class="align-middle">Create</span>
            </a>
        </li>
        <li
            class="sidebar-item  {{ request()->route()->getName() == 'clients.index' ||request()->route()->getName() == 'clients.show' ||request()->route()->getName() == 'clients.edit'? 'active': '' }}">
            <a class="sidebar-link" href="{{ route('clients.index') }}">
                <i class="align-middle me-2 fas fa-fw fa-list-alt"></i> <span class="align-middle">All</span>
            </a>
        </li>
    </ul>

</li>

<li
    class="sidebar-item {{ request()->route()->getName() =='claims.index' ??request()->route()->getName() == 'claims.show' ||request()->route()->getName() == 'claims.edit'? 'active': '' }}">
    <a data-bs-target="#claims" data-bs-toggle="collapse" class="sidebar-link collapsed">
        <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Claims</span>
    </a>
    <ul id="claims" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

        <li
            class="sidebar-item  {{ request()->route()->getName() == 'claims.index' ||request()->route()->getName() == 'claims.show' ||request()->route()->getName() == 'claims.edit'? 'active': '' }}">
            <a class="sidebar-link" href="{{ route('claims.index') }}">
                <i class="align-middle me-2 fas fa-fw fa-file-alt"></i> <span class="align-middle">All</span>
            </a>
        </li>

        <li class="sidebar-item  {{ request()->route()->getName() == 'claims.create' }}">
            <a class="sidebar-link" href="{{ route('claims.create') }}">
                <i class="align-middle me-2 fas fa-fw fa-plus"></i> <span class="align-middle">Create</span>
            </a>
        </li>

    </ul>

</li>
