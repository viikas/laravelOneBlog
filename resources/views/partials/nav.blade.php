
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/vikas/public"> My Blogs site</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
        
            <li><a href="/vikas/public/contact">contacts</a></li>
          </ul>
          

          <ul class="nav navbar-nav navbar-right">
         @if(Auth::check())
          <li><a href="/vikas/public/admin">Dashboard</a></li>
            <li><a>welcome {{ Auth::user()->name}}</a></li>
            <li><a href="{{route('logout') }}">Logout</a></li>
         @else
           <li><a href="{{ route('register') }}">Sign Up</a></li>
           <li><a href="{{route('login')}}">Login</a></li>
         @endif
       </ul>
        </div>
      </div>
    </nav>
