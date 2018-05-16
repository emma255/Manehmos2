@include('layouts.head')
<body>
    <div class="" align="center">
        <div class="p-3 mb-8 bg-secondary text-white"><h3>MATERNAL AND NEWBORN HEALTH MONITORING SYSTEM (Manehmos)</h3></div>
        <nav class="navbar navbar-expand navbar-light bg-info col-sm>
   
                <div class="navbar navbar-collapse p-3 mb-2 bg-light" align="center">
                    <div class="col-md-3"><p>{{Auth::user()->center}}</p></div>
                    <ul class="navbar-nav mr-auto col-sm">

                        <a class="navbar nav-link" href="{{ url('/') }}">
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

                        <a class="navbar nav-link" href="{{ url('/') }}">
                            {{ __('TAFUTA REKODI') }}
                        </a>

                        <div class="dropdown show">
                          <a class="dropdown-toggle-primary navbar nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('JAZA TAARIFA') }}
                          </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('postnatal') }}">{{ __('POSTNATAL') }} <p>Baada ya kujifungua</p></a>
                            <a class="dropdown-item" href="{{ url('infant') }}">{{ __('INFANT') }} <p>Ufuatiliaji mtoto mchanga  siku 0-42</p></a>
                            <a class="dropdown-item" href="{{ url('register6') }}">{{ __('MTUHA NAMBA 6') }} <p>Wajawazito</p></a>
                            <a class="dropdown-item" href="{{ url('register7') }}">{{ __('MTUHA NAMBA 7') }} <p>Watoto</p></a>
                            <a class="dropdown-item" href="{{ url('register13') }}">{{ __('MTUHA NAMBA 13') }} <p>Mama na mtoto baada ya kujifungua</p></a>
                          </div>
                        </div>


                        <div class="dropdown show">
                          <a class="dropdown-toggle-primary navbar nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('RIPOTI') }}
                          </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('') }}">{{ __('MAMA') }}</a>
                            <a class="dropdown-item" href="{{ url('') }}">{{ __('MTOTO') }}</a>
                          </div>
                        </div>

                           <a class="navbar nav-link" href="{{ url('/') }}">
                            {{ __('MSAADA') }}
                        </a>
            
                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                                <div class="">
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
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
