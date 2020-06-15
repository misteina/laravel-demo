<div id="search">
    <div id="menubar">
        @auth
            <a href="/profile/{{ Auth::id() }}">Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/logout">Log Out</a>
        @endauth
        @guest
            <a href="/login">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/signup">Sign Up</a>
        @endguest
    </div>
    <form id="sform" action="search" method="GET">
        <div id="searchbox2">
            <input type="text" name="q" maxlength="20" id="find2" placeholder="Search Your Interest" value="{{ $query }}">
            <input type="submit" id="searchbutt" value="">
        </div>
    </form>
    @if (count($result) > 0)
        @foreach ($result as $profile)
            <a href="/profile/{{$profile->id}}">
                <div class="res">
                    <div class="sava"></div>
                    <div class="pdet">
                        <div class="name">{{$profile->name}}</div>
                        <div class="sex">{{$profile->sex}}</div>
                        <div class="location">{{$profile->city}}</div>
                    </div>
                </div>
            </a>
        @endforeach
    @else
        <div id="nores">
            No results found.
        </div>
    @endif
</div>