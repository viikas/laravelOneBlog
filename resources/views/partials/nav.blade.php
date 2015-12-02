<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/vikas/public"> My Blogs site</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/vikas/public/blogs">Blogs</a></li>
        <li><a href="{{route('blogs.create') }}">Create </a></li>
        
        <li><a href="/vikas/public/contact">contacts</a></li>
      </ul>

       <ul class="nav navbar-nav navbar-right">
         @if(Auth::check())
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