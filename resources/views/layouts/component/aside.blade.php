<?php

if (!function_exists('set_active')) {
  function set_active($path, $active = 'active')
  {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
  }
}
?>


<aside class="main-sidebar sidebar-dark-success elevation-4 bg-green">
  <!-- Sidebar -->
  <div class="sidebar bg-green">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/img/trick-treat5-img.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          {{ $userGlobal->name }}
          <p><small>{{ $userGlobal->name }}@gmail.com</small></p>
        </a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="{{ url('home') }}" class="nav-link {{ set_active('home') }}">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
        @canany(['create-role', 'edit-role', 'delete-role'])
        <!-- Management Products -->
        <li class="nav-item">
          <a href="{{ url('products') }}" class="nav-link {{ set_active('products*') }}">
            <i class="nav-icon fas fa-boxes"></i>
            <p>To Do List</p>
          </a>
        </li>
        @endcanany
        <!-- Exit -->
        <li class="nav-header">Exit</li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>{{ __('Logout') }}</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>