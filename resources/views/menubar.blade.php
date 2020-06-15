<div id="menubar">
    @auth
        <a href="/">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/logout">Log Out</a>
    @endauth
    @guest
        <a href="/login">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/signup">Sign Up</a>
    @endguest
</div>