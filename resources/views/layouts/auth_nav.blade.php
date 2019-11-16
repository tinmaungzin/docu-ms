
<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
        <a href="index.html"><img src=" {{asset('images/MTU_logo.png')}} "
                                  style="width: 60px;height: 70px;margin-right: 30px;"> </a>
        <span class="navbar-brand">MTU</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav"
                aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
            <div>
                <form class="search" action="{{route('search.index')}}" method="post">
                    @csrf
                    <input id="search" type="search" value="{{old('query')}}" placeholder="Search" name="query"
                           onkeypress="if(event.key === 'Enter') searchHandler(event)">
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
