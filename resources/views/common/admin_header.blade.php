
<header class="admin-header">
	<nav class="navbar navbar-expand-lg header-navbar">
      <div class="container-fluid">
        <div class="collapse navbar-collapse main-menu" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-menu">
            <li class="nav-item {% if activeMenu is defined and activeMenu == 'chessPlayers' %} active {% endif %}">
              <a class="nav-link" aria-current="page" href="">Շախմատիստներ</a>
            </li>	

          <ul>
        </div>
        <div class="navbar-nav logout float-end">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.logout') }}"> Ելք</a>
            </li>
        </div>
      </div>
  </nav>
</header>