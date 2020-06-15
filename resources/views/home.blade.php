<div id="home">
    <div id="intro">Meet People By Shared Interest</div>
    <form action="search" method="GET">
        <div id="searchbox">
            <input type="text" name="q" maxlength="20" id="find" placeholder="Search Your Interest">
            <input type="submit" id="searchbutt" value="">
        </div>
    </form>
    <div id="options">
        @guest
            <a href="/login">Login</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<a href="/register">Sign Up</a>
        @endguest
        @auth
            <a href="/profile/{{Auth::id()}}">Profile</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<a href="/logout">Log out</a>
        @endauth
    </div>
</div>