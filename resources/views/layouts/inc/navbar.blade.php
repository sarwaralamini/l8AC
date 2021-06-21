<header class="app-header"><a class="app-header__logo" href="index.html">{{ config('app.name') }}</a>
<!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
<!-- Navbar Right Menu-->
<ul class="app-nav">
    <!-- User Menu-->
    <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
    <ul class="dropdown-menu settings-menu dropdown-menu-right">
         <li>
             <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('form-submit').submit();">
                <i class="fa fa-sign-out fa-lg"></i> Logout
            </a>
            <form id="form-submit" action="{{ route('logout') }}" method="post" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    </li>
</ul>
</header>
