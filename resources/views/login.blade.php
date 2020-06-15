<div id="login">
    <div id="title">SIGN IN</div>
    @if (isset($error))
        <div id="error">{{ $error }}</div>
    @endif
    <form id="signinform" action="/login" method="POST">
        <input type="email" maxlength="50" class="input" name="email" placeholder="Email Address"><br>
        <input type="password" maxlength="20" class="input" name="password" placeholder="Password"><br>
        @csrf
        <input type="submit" id="button" value="LOGIN">
    </form>
</div>