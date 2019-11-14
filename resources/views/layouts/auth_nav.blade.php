{{--<a href="{{route('documents.create')}}">Upload</a>--}}
{{--<a href="{{route('students.edit', ['student' => $student->id])}}">Edit Profile</a>--}}
{{--<a href="{{route('login.logout')}}">Logout</a>--}}






{{--<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">--}}
{{--    <div class="container">--}}
{{--        <img src=" {{asset('images/MTU_logo.png')}} " style="width: 60px;height: 70px;margin-right: 30px;">--}}
{{--        <a class="navbar-brand" href="index.html">MTU</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="oi oi-menu"></span> Menu--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="site-nav">--}}
{{--            <div>--}}
{{--                <form class="search" action="{{route('search.index')}}" method="post">--}}
{{--                    @csrf--}}
{{--                    <input  id="search" type="search" value="{{old('query')}}"  placeholder="Search" name="query" onkeypress="if(event.key === 'Enter') searchHandler(event)" >--}}
{{--                    <br/>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <li style="list-style: none" class="nav-item active"><a href="#" class="nav-link">Home</a></li>--}}
{{--                @if($auth_user->type==='stu')--}}
{{--                    <li style="list-style: none" class="nav-item"><a href="{{route('info.about')}}" class="nav-link">About</a></li>--}}
{{--                @endif--}}
{{--                @if($auth_user->type==='hod')--}}
{{--                    <li style="list-style: none" class="nav-item"><a href="{{route('info.hodAbout')}}" class="nav-link">About</a></li>--}}
{{--                    <li style="list-style: none" class="nav-item"><a href="{{route('hods.show')}}" class="nav-link">Waiting List</a></li>--}}
{{--                    <li style="list-style: none" class="nav-item"><a href="{{route('hods.list')}}" class="nav-link">Approved List</a></li>--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--            <li style="list-style: none" class="nav-item">--}}
{{--                <div class="dropdown ">--}}
{{--                    <button class="dropbtn"><img  src=" {{asset('images/profileicon.png')}} " style="width:25px;margin-left: -120px" />--}}
{{--                        <a href="{{route('students.edit', ['student' => $auth_user->id])}}">--}}
{{--                            <p style="margin-top: -22px;margin-left:20px;color:#fff;font-size:14px;text-align:left">{{$auth_user->name}}</p>--}}
{{--                        </a>--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"--}}
{{--                             width="50" height="50"--}}
{{--                             viewBox="0 0 172 172"--}}
{{--                             style=" fill:#000000;">--}}
{{--                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">--}}
{{--                                <path d="M0,172v-172h172v172z" fill="none"></path>--}}
{{--                                <g fill="#ffffff">--}}
{{--                                    <path d="M6.88,48.16v6.88h158.24v-6.88zM6.88,82.56v6.88h158.24v-6.88zM6.88,116.96v6.88h158.24v-6.88zM61.275,141.04c-1.30344,0.20156 -2.37844,1.12875 -2.76812,2.37844c-0.38969,1.26313 -0.02688,2.63375 0.94062,3.53406l24.08,24.08c0.645,0.67188 1.54531,1.04813 2.4725,1.04813c0.92719,0 1.8275,-0.37625 2.4725,-1.04813l24.08,-24.08c1.02125,-0.98094 1.33031,-2.49937 0.77938,-3.80281c-0.5375,-1.30344 -1.84094,-2.13656 -3.25188,-2.10969h-48.16c-0.1075,0 -0.215,0 -0.3225,0c-0.1075,0 -0.215,0 -0.3225,0zM70.305,147.92h31.39l-15.695,15.695z">--}}
{{--                                    </path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-content">--}}

{{--                        <a href="{{route('documents.create')}}">Upload PDF</a>--}}
{{--                        <a href="{{route('login.logout')}}">Logout</a>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</nav>--}}



<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
        <a  href="index.html"><img src=" {{asset('images/MTU_logo.png')}} " style="width: 60px;height: 70px;margin-right: 30px;"> </a>
        <span class="navbar-brand">MTU</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
            <div>
                <form class="search" action="{{route('search.index')}}" method="post">
                    @csrf
                    <input  id="search" type="search" value="{{old('query')}}"  placeholder="Search" name="query" onkeypress="if(event.key === 'Enter') searchHandler(event)" >
                    <br/>
                </form>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="home1"><a href="{{route('documents.index')}}" class="nav-link">Home</a></li>
                @if($auth_user->type==='stu')
                    <li class="nav-item"><a href="{{route('info.about')}}" class="nav-link">About</a></li>
                @endif
                @if($auth_user->type==='hod')
                    <li class="nav-item"><a href="{{route('info.hodAbout')}}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{route('hods.show')}}" class="nav-link">Pending</a></li>
                    <li class="nav-item"><a href="{{route('hods.list')}}" class="nav-link">Approved</a></li>
                @endif
                <li class="nav-item">
                    <div class="dropdown ">
                        <button class="dropbtn">
                            <p style="margin-top: 0px;margin-left:20px;color:#fff;font-size:14px;text-align:left">
                                {{$auth_user->name}}
                            </p>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{route('students.edit', ['student' => $auth_user->id])}}">Profile</a>
                            <a href="{{route('documents.create')}}">Upload PDF</a>
                            <a href="{{route('login.logout')}}">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>
