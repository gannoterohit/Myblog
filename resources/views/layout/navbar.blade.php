@include('layout.headar')
@auth
    @php

        $user = auth()->user();

        $name = $user->name;

    @endphp
@endauth
<nav class="navbar navbar-expand-lg navbar-light bg-dark mb-4">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <a href="{{ route('create-post') }}" class="btn btn-primary"> Create Post </a>&nbsp;
                @auth
                    <div class="text-white">
                        {{ $user->name }}
                    </div>
                @endauth
            </ul>
            <form class="d-flex">
                @guest
                    <a href="{{route('register')}}" class="btn btn-info"> Sign Up </a>&nbsp;
                    <a href="{{route('login')}}" class="btn btn-info"> Sign in </a>&nbsp;
                @endguest
                @auth
                    <a href="{{ route('logout') }}" class="btn btn-info">Logout</a>&nbsp;
                    <a href="{{ route('my-post') }}" class="btn btn-info float-start">my post</a>
                @endauth
            </form>
        </div>
    </div>
</nav>

@include('layout.footer')
