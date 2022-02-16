<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="margin-top: -30px;">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column pt-0 pt-md-5">
            <li class="nav-item">
                <a disabled class="nav-link {{ Route::is('admin.users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">
                    <i class="bi bi-people-fill"></i>
                    @lang('users')
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Cuenta</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" style="cursor: pointer;" onclick="document.getElementById('logoutForm').submit()">
                    <i class="bi bi-box-arrow-right"></i>
                    @lang('logout')
                    <form id="logoutForm" action="{{ route('logout') }}" method="post" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>
        </ul>
    </div>
  </nav>
