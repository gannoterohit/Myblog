  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="index.html">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-layout-text-window-reverse"></i><span>User</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                  <li>
                      <a href="{{route('all-user')}}">
                          <i class="bi bi-circle"></i><span>All user</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Tables Nav -->
      </ul>

  </aside><!-- End Sidebar-->
