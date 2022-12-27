<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h2 class="text-">Anime</h2>
    <ul class="navbar-nav">
      @role('admin')
      <li class="nav-item active">
        <a style="text-align: center; rgba(89, 89, 89, 0.356) solid;" class="nav-link text-dark" href="{{ '/animes' }}">Animes</a>
      </li>
    @else
    <li class="nav-item active">
      <a style="text-align: center; rgba(89, 89, 89, 0.356) solid;" class="nav-link text-dark" href="{{ '/' }}">Dashboard</a>
    </li>
    <li class="nav-item active">
      <a style="text-align: center; rgba(89, 89, 89, 0.356) solid;" class="nav-link text-dark" href="{{ '/logs' }}">Logs</a>
    </li>
  </ul>
    @endrole
      
        
    <div class="collapse navbar-collapse" id="navbarText">
            <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black; margin-left: 85%"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
    </div>


    

    
</nav>

<style>

</style>
