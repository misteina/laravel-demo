<div id="profile">
    @include('menubar')
    <div id="details">
        <div id="avatar"></div>
        <div id="nage"><span>{{$name}}</span>, {{$sex}}</div>
        <span>{{$city}}</span>
        <div id="msgicon"></div>
    </div>
    <div id="interests">
        <span>INTERESTS</span>
            @if (empty($interests))
            <div id="noint">No interests added yet</div>
            @else
                @foreach ($interests as $val)
                    <div class="int">{{$val}}</div>
                @endforeach
            @endif
        @if ($path === Auth::id())
            <div id="add">&#10010;</div>
            <div id="addform" style="display: none;">
                    @if (isset($error))
                        <div id="error">{{$error}}</div>
                    @endif
                <form action="/interest" method="POST">
                    <textarea name="inter" id="textarea" placeholder="Enter your interests"></textarea><br>
                    @csrf
                    <input type="submit" id="subint" value="SUBMIT">
                </form>
            </div>
        @endif
    </div>
</div>