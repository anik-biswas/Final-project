<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
      {{-- <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v1</p>
                  </a>
              </li>
             
          </ul>
      </li> --}}

      <li class="nav-item">
          <a href="{{ url('/admin/categories') }}" class="nav-link {{ request()->is('*/categories*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-desktop"></i>
              <p>Category</p>
          </a>
      </li>
      <li class="nav-item">
          <a href="{{ url('/admin/courses') }}" class="nav-link {{ request()->is('*/courses*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-desktop"></i>
              <p>Courses</p>
          </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/admin/instructors') }}" class="nav-link {{ request()->is('*/instructors*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-desktop"></i>
            <p>Instructor</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('/admin/courseclasses') }}" class="nav-link {{ request()->is('*/courseclasses*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-desktop"></i>
            <p>Course Class</p>
        </a>
    </li>

  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>

<!-- /.sidebar -->