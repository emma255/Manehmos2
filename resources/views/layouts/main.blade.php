@include('layouts.head')

<body>
    <div>
        <div class="p-1 mb-8 bg-secondary text-white"><h3 class="offset-2">MATERNAL AND NEWBORN HEALTH MONITORING SYSTEM (Manehmos)</h3></div>
        <nav class="navbar navbar-expand navbar-light text-white bg-info col-sm">

                <div class="navbar navbar-collapse bg-blue">
                    <div class="col-md-3"><p style="font-size: 10pt">{{Auth::user()->center}}</p></div>
                    <ul class="navbar-nav mr-auto col-sm">

                        <a class="navbar nav-link" href="{{ url('homepage') }}">
                            {{ __('MWANZO') }}
                        </a>

                        <div class="dropdown show">
                          <a class="dropdown-toggle-primary navbar nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('SAJILI') }}
                          </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('maternal/register') }}">{{ __('MAMA') }}</a>
                            <!-- <a class="dropdown-item" href="{{ url('husband/register') }}">{{ __('BABA') }}</a> -->
                            <a class="dropdown-item" href="{{ url('child/register') }}">{{ __('MTOTO') }}</a>
                          </div>
                        </div>

                        <a class="navbar nav-link" href="{{ url('/progress2') }}">
                            {{ __('MAENDELEO') }}
                        </a>

                        <div class="dropdown show">
                          <a class="dropdown-toggle-primary navbar nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('JAZA TAARIFA') }}
                          </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('postnatal') }}">{{ __('POSTNATAL') }} <p>Baada ya kujifungua</p></a>
                            <a class="dropdown-item" href="{{ url('infant') }}">{{ __('INFANT') }} <p>Ufuatiliaji mtoto mchanga  siku 0-42</p></a>
                            <a class="dropdown-item" href="{{ url('register6') }}">{{ __('MTUHA NAMBA 6') }} <p>Wajawazito</p></a>
                            <a class="dropdown-item" href="{{ url('register7') }}">{{ __('CHANJO') }} <p>Watoto</p></a>
                            <a class="dropdown-item" href="{{ url('register13') }}">{{ __('MTUHA NAMBA 13') }} <p>Mama na mtoto baada ya kujifungua</p></a>
                          </div>
                        </div>


                        <a class="navbar nav-link" href="{{ url('/reportHome') }}">
                            {{ __('RIPOTI') }}
                        </a>


                                        <!--<a class="navbar nav-link" href="{{ url('homepage') }}">
                            {{ __('MSAADA') }}
                        </a> -->
                    </ul>

                    <!-- Right Side Of Navbar -->

                <div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }} as {{Auth::user()->name}}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (Session::has('flash_message'))

            <div class="alert alert-success text-capitalize text-center">
            		 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
            {{ Session::get('flash_message') }} {{Session::forget('flash_message')}}</div>

            @endif
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/calculations.js') }}"></script>
</body>
</html>
