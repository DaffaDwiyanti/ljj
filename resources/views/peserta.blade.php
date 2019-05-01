<!doctype html>
<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic");
  
  body {
    font-size: 14px;
    font-family: Lato, "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #666;
    background: #f2f2f2;
    /*-webkit-text-size-adjust: 100%;*/
    -moz-osx-font-smoothing: grayscale;
    /*-webkit-font-smoothing: antialiased;*/ }
  
  a {
    text-decoration: none; }
    a:hover {
      text-decoration: none; }
  
  /* ------------ Sidenav CSS ------------- */
  #sidenav {
    position: fixed;
    width: 300px;
    height: auto;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 99999;
    background: #101010; }
    #sidenav.open {
      left: -300px; }
    #sidenav .logo {
      width: 100%;
      padding: 20px 50px;
      background: #101010;
      display: block; }
      #sidenav .logo a {
        color: #dadada;
        font-size: 30px; }
        #sidenav .logo a.nav-icon {
          display: none; }
    #sidenav .menu {
      position: static; }
      #sidenav .menu ul {
        list-style: none;
        background: #101010;
        padding: 10% 0;
        margin: 0; }
        #sidenav .menu ul li {
          padding: 6px 14%; }
          #sidenav .menu ul li.active {
            border-left: solid 4px red; }
          #sidenav .menu ul li a {
            font-size: 22px;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 300;
            display: block; }
            #sidenav .menu ul li a:hover {
              color: rgba(255, 255, 255, 0.5); }
            #sidenav .menu ul li a.logout:hover {
              color: red; }
          #sidenav .menu ul li ul {
            list-style: none;
            margin: 10px auto 0;
            padding: 10px 15px;
            border-top: solid 1px rgba(255, 255, 255, 0.08);
            border-bottom: solid 1px rgba(255, 255, 255, 0.08); }
            #sidenav .menu ul li ul li {
              padding: 6px 3px; }
              #sidenav .menu ul li ul li a {
                font-size: 18px;
                color: rgba(255, 255, 255, 0.7); }
  
  @media (max-width: 768px) {
    #sidenav {
      width: 100%;
      height: 60px;
      background: none; }
      #sidenav .logo {
        padding: 10px 20px; }
        #sidenav .logo a {
          font-size: 20px; }
          #sidenav .logo a.nav-icon {
            display: inline; }
      #sidenav .menu {
        display: none; }
        #sidenav .menu.open {
          position: fixed;
          top: 0;
          bottom: 0;
          right: 0;
          left: 0;
          z-index: -1;
          display: block !important; }
        #sidenav .menu ul {
          border-top: solid 1px #333; }
          #sidenav .menu ul li {
            padding: 6px 5%; } }
  
  /*# sourceMappingURL=app.main.css.map */
</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Latihan Jarak Jauh</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        
    <div class="app">
    <div id="sidenav">
      <div class="wrapper">
        <div class="logo">
          <a href="#">Dashboard</a>
          <a href="#" class="nav-icon pull-right"><i class="fa fa-bars"></i></a>
        </div>
        <div class="menu">
          <ul>
            <li class="active"><a href="/">Home</a></li>
            <!-- If login as admin -->
            <li>
              <a href="/peserta">My Account</a>
                <ul>
                  <li><a href="/kelaspeserta">Kelas</a></li>
                </ul>
            </li>
            <li><a href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
<html>