      <br>
      <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-black-500 ti-home"></i>
                </span>
                <span class="title">User Management</span>
                <span class="arrow">
                  <i class="ti-angle-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
              @can('isAdmin')
                <li>
                  <a class='sidebar-link' href="/admin/users">Admin</a>
                </li>
                <li>
                  <a class='sidebar-link' href="/agent">Agent</a>
                </li>
                @endcan
                <li>
                  <a class='sidebar-link' href="/sales">Sales</a>
                </li>
                @can('isAdmin')
                <li>
                  <a class='sidebar-link' href="#">Sales Group</a>
                </li>
                @endcan
              </ul>            
      </li>
      <br>
      <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-black-500 ti-bar-chart-alt"></i>
                </span>
                <span class="title">Project Management</span>
                <span class="arrow">
                  <i class="ti-angle-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="/project">Project</a>
                </li>
                <li>
                  <a class='sidebar-link' href="#">Payment</a>
                </li>
                <li>
                  <a class='sidebar-link' href="#">Category Payment Type</a>
                </li>
              </ul>
      </li>
      <br>
      <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-black-500 ti-shopping-cart-full"></i>
                </span>
                <span class="title">Transaction</span>
                <span class="arrow">
                  <i class="ti-angle-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="#">Pending Transaction</a>
                </li>
                <li>
                  <a class='sidebar-link' href="#">Pending Payment</a>
                </li>
              </ul>
      </li>
      <br>
      <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-black-500 ti-stats-up"></i>
                </span>
                <span class="title">Report</span>
                <span class="arrow">
                  <i class="ti-angle-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class='sidebar-link' href="#">Menu</a>
                </li>
                <li>
                  <a class='sidebar-link' href="#">Menu</a>
                </li>
              </ul>
        </li>
      </li>