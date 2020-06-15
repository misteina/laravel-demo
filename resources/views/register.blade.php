<div id="signup">
    <div id="title">SIGN UP</div>
    <form id="signupform" action="/register" method="POST">
        @if (isset($error))
            <div id="error">{{ $error }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errmsg)
                        <li>{{ $errmsg }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="email" name="email" maxlength="50" class="input" placeholder="Email Address"><br>
        <input type="text" name="id" maxlength="50" class="input" placeholder="User Name"><br>
        <input type="text" name="name" maxlength="50" class="input" placeholder="Name"><br>
        <select id="register_sex" class="input" name="sex">
            <option value="">Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <input type="text" name="city" maxlength="50" class="input" placeholder="City"><br>
        <input type="password"name="password" maxlength="20" class="input" placeholder="Password"><br>
        <input type="password" name="vpassword" maxlength="20" class="input" placeholder="Password"><br>
        @csrf
        <input type="submit" id="button" value="SIGN UP">
    </form>
</div>