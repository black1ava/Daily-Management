<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/index.css">
    <script type="text/javascript" src="/js/index.js"></script>
    <title></title>
  </head>
  <body>
    <nav class="topbar">
      <a href="/" class="topbar-brand">Daily Management</a>
      <div class="menus">
      @guest
        <a href="{{ route('login') }}" class="link">Login</a>
        <a href="{{ route('register') }}" class="link">Register</a>
      @else
        <a href="javascript:void(0)" class="link dropdown" id="profile">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-content" content-of="profile">
          <a href="/logout" class="link link-danger" onclick="event.preventDefault(); document.getElementById('logout').submit();">
            Logout
          </a>
          <form id="logout" action="{{ route('logout') }}" method="post">
            @csrf
          </form>
        </div>
      @endguest
      </div>
    </nav>
    @auth
    <div class="sidebar" id="sidebar">
      <div class="sidebar-menu">
        <a href="/" class="sidebar-link">Home</a>
        <a href="{{ route('todos.create') }}" class="sidebar-link">Todos</a>
        <a href="#" class="sidebar-link">Note</a>
        <a href="#" class="sidebar-link">Transaction</a>
      </div>
    </div>
    <div class="sidebar-toggle" toggle-for="sidebar"></div>
    @endauth

    @yield('content')
  </body>
</html>
