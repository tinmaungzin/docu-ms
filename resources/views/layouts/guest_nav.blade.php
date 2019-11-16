
<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
        <a  href="index.html"><img src=" {{asset('images/MTU_logo.png')}} " style="width: 60px;height: 70px;margin-right: 30px;"> </a>
        <span class="navbar-brand">MTU</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
            <div>
                <form class="search" action="{{route('search.guestIndex')}}" method="post">
                    @csrf
                    <input  id="search" type="search" value="{{old('query')}}"  placeholder="Search" name="query" onkeypress="if(event.key === 'Enter') searchHandler(event)" >
                    <br/>
                </form>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('documents.guestIndex')}}" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="{{route('info.guestAbout')}}" class="nav-link">About</a></li>
                <li class="nav-item active"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                <li class="nav-item active"><a href="{{route('students.create')}}" class="nav-link">Register</a></li>


            </ul>
        </div>
    </div>

</nav>
