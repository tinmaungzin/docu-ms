{{--<a href="{{route('login.form')}}">Login</a>--}}
{{--<a href="{{route('students.create')}}">Register</a>--}}



<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
        <img src="{{asset('images/MTU_logo.png')}} " style="width: 60px;height: 70px;margin-right: 30px;">
        <a class="navbar-brand" href="index.html">MTU</a>
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

                <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('login.form')}}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{route('students.create')}}" class="nav-link">Register</a></li>

            </ul>
        </div>

    </div>
</nav>
