<div class="wrapper ">
    @if (auth()->user()->role_id = 1)
    @include('layouts.navbars.sidebar-admin')
    @endif

    @if (auth()->user()->role_id = 2)
    @include('layouts.navbars.sidebar-driver')
    @endif

    @if (auth()->user()->role_id = 3)
    @include('layouts.navbars.sidebar')
    @endif


    <div class="main-panel">
        @include('layouts.navbars.navs.auth')

        @yield('content')

        @include('layouts.footers.auth')

    </div>
</div>
