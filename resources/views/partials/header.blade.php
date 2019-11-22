<div >
  <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">HI - FI</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          @if(! (Auth::user() and Auth::user()->subscribed('primary')))
            <li class="active">
              <a  href="/subscribe">Subscribe</a>
            </li>
          @endif
          
            @if(Auth::user())
              <li><a href="/logout">Logout</a></li>
            @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            @endif
        </ul>
      </div>
    </nav>
</div>