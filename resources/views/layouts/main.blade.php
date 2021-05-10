@include('layouts.head')

<body>
    <div class="p-1 mb-8 bg-secondary text-white">
        <h3 class="offset-2">MATERNAL AND NEWBORN HEALTH MONITORING SYSTEM (Manehmos)</h3>
    </div>
    <nav class="navbar navbar-expand navbar-light text-white bg-info col-sm">

        <div class="navbar navbar-collapse bg-blue">
            <div class="col-md-3">
                <p style="font-size: 10pt">Center: {{ Auth::user()->center }}</p>
            </div>
            <ul class="navbar-nav mr-auto col-sm">

                <a class="navbar nav-link" href="{{ url('homepage') }}">
                    {{ __('MWANZO') }}
                </a>

                <div class="dropdown show">
                    <a class="dropdown-toggle-primary navbar nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('SAJILI') }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('maternal.add') }}">{{ __('MAMA') }}</a>
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
                        <a class="dropdown-item" href="{{ url('postnatal') }}">{{ __('POSTNATAL') }}
                            <p>Baada ya kujifungua</p>
                        </a>
                        <a class="dropdown-item" href="{{ url('infant') }}">{{ __('INFANT') }}
                            <p>Ufuatiliaji mtoto mchanga siku 0-42</p>
                        </a>
                        <a class="dropdown-item" href="{{ route('maternals') }}">{{ __('MTUHA NAMBA 6') }}
                            <p>Wajawazito</p>
                        </a>
                        <a class="dropdown-item" href="{{ url('register7') }}">{{ __('CHANJO') }}
                            <p>Watoto</p>
                        </a>
                        <a class="dropdown-item" href="{{ url('register13') }}">{{ __('MTUHA NAMBA 13') }}
                            <p>Mama na mtoto baada ya kujifungua</p>
                        </a>
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
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }} as {{Auth::user()->name}}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <main class="py-4 ml-2 mr-2">
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script type="text/javascript">
        function miscariage() {
            var pregcount = document.getElementsByName("mimba_ngapi")[0].value;
            var delivcount = document.getElementsByName("amezaa_mara_ngapi")[0].value;
            var miscariage = pregcount - delivcount;

            document.getElementById("mimba_zilizoharibika").value = miscariage;
        }

        $(function() {
            if ("<?php echo(Session::has('success')) ?>") {
                toastr.success("{{ Session::get('success') }}", "Success")
            } else if ("<?php echo(Session::has('warning')) ?>") {
                toastr.warning("{{ Session::get('warning') }}", "Warning")
            } else if ("<?php echo(Session::has('error')) ?>") {
                toastr.error("{{ Session::get('error') }}", "Error")
            }
        })

    </script>
</body>
</html>
