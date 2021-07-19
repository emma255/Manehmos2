@include('components.head')
<body class="g-sidenav-show bg-white">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <section>
        <div class="page-header section-height-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            @yield('content')
                        </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                            {{-- <img src="{{ asset('img/shapes/pattern-lines.svg') }}" alt="pattern-lines" class="position-absolute opacity-4 start-0"> --}}
                            <div class="position-relative">
                                <img class="max-width-500 w-100 position-relative z-index-2" src="{{ asset('img/illustrations/rocket-white.png') }}" alt="image">
                            </div>
                            <h4 class="mt-5 text-white font-weight-bolder">Your journey starts here</h4>
                            <p class="text-white">Just as it takes a company to sustain a product, it takes a community to sustain a protocol.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.basic-js')
</body>

</html>
