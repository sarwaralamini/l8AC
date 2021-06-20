<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('dist/images/avatar.png') }}" alt="User Image" style="width:35px;">
    <div>
        <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
        <p class="app-sidebar__user-designation">Full Stack Web Developer</p>
    </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item {{ (request()->is('dashboard')) ? 'active':''}}" href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    </ul>
</aside>
