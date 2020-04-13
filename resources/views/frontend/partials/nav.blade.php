


<nav class="navbar navbar-expand-md navbar-light bg-nav sticky-top">

  <a class="navbar-brand" href="{{ route('index') }}"><img src="https://img.icons8.com/ios-glyphs/48/000000/beach.png"><span class="text-white"> Tour-De-BD</span></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" onclick="openSlideMenu()">
      <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="btn btn-mdb-color btn-md" href="{{ route('registration') }}"><i class="fas fa-sign-in-alt mr-2"></i><b>Login</b></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-mdb-color btn-md" href="{{ route('registration') }}"><i class="fas fa-user-plus mr-2"></i><b>Registration</b></a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Places" aria-label="Search">
      <button class="btn btn-outline-warning p-2 mx-0 mb-2" type="submit"> <i class="fa fa-search"></i></button>
    </form>

</div>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a class="btn btn-mdb-color btn-md" href="{{ route('registration')}}"><i class="fas fa-sign-in-alt mr-2"></i><b>Login</b></a>
    <a class="btn btn-mdb-color btn-md" href="{{ route('registration')}}"><i class="fas fa-user-plus mr-2"></i><b>Registration</b></a>
    <a class="btn btn-mdb-color btn-md" href="{{ route('registration')}}"><i class="fas fa-sign-in-alt mr-2"></i><b>Services</b></a>
    <a class="btn btn-mdb-color btn-md" href="{{ route('registration')}}"><i class="fas fa-user-plus mr-2"></i><b>Contact</b></a>
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
</nav>
