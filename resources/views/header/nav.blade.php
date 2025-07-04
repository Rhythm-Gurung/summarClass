<nav>
  <a class="@if(request()->is('/')) active @endif" href="#">Dashboard</a>
  <a class="@if(request()->is('Reports')) active @endif" href="#">Reports</a>
  <a class="@if(request()->is('Analytics')) active @endif" href="#">Analytics</a>
  <a class="@if(request()->is('Settings')) active @endif" href="#">Settings</a>
</nav>