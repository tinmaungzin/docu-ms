{{--<a href="{{route('login.form')}}">Login</a>--}}
{{--<a href="{{route('students.create')}}">Register</a>--}}


{{--<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">--}}
{{--    <div class="container">--}}
{{--        <img src="{{asset('images/MTU_logo.png')}} " style="width: 60px;height: 70px;margin-right: 30px;">--}}
{{--        <a class="navbar-brand" href="index.html">MTU</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="oi oi-menu"></span> Menu--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="site-nav">--}}
{{--            <div>--}}
{{--                <form class="search" action="{{route('search.guestIndex')}}" method="post">--}}
{{--                    @csrf--}}
{{--                    <input  id="search" type="search" value="{{old('query')}}"  placeholder="Search" name="query" onkeypress="if(event.key === 'Enter') searchHandler(event)" >--}}
{{--                    <br/>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <ul class="navbar-nav ml-auto">--}}

{{--                <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>--}}
{{--                <li class="nav-item"><a href="#" class="nav-link">About</a></li>--}}
{{--                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>--}}
{{--                <li class="nav-item"><a href="{{route('students.create')}}" class="nav-link">Register</a></li>--}}

{{--            </ul>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</nav>--}}


<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
        <a href="/"><img src=" {{asset('images/MTU_logo.png')}} "
                                  style="width: 60px;height: 70px;margin-right: 30px;"> </a>
        <span class="navbar-brand">MTU</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav"
                aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
            <div>
                <form class="search" action="{{route('search.guestIndex')}}" method="post">
                    @csrf
                    <input id="search" type="search" value="{{old('query')}}" placeholder="Search" name="query"
                           onkeypress="if(event.key === 'Enter') searchHandler(event)">
                    <br/>
                </form>
            </div>
            @if(\Illuminate\Support\Facades\Auth::guest())
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{route('documents.guestIndex')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active"><a href="{{route('info.guestAbout')}}" class="nav-link">About</a></li>
                    <li class="nav-item active"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                    <li class="nav-item active"><a href="{{route('students.create')}}" class="nav-link">Register</a>
                    </li>


                </ul>
            @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" id="home1"><a href="{{route('documents.index')}}" class="nav-link">Home</a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->type==='stu')

                        <li class="nav-item"><a href="{{route('info.about')}}" class="nav-link">About</a></li>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->type==='hod')
                        <li class="nav-item"><a href="{{route('info.hodAbout')}}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{route('hods.show')}}" class="nav-link">Pending</a></li>
                        <li class="nav-item"><a href="{{route('hods.list')}}" class="nav-link">Approved</a></li>
                    @endif
                    <li class="nav-item">
                        <div class="dropdown ">
                            <button class="dropbtn">
                                <p style="margin-top: 0px;margin-left:20px;color:#fff;font-size:14px;text-align:left">
                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                </p>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{route('students.edit', ['student' => \Illuminate\Support\Facades\Auth::user()->id])}}">Profile</a>
                                <a href="{{route('documents.create')}}">Upload PDF</a>
                                <a href="{{route('login.logout')}}">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            @endif

        </div>
    </div>

</nav>
