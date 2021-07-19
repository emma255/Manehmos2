<li class="nav-item dropdown pe-2 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-user me-sm-1"></i>
        <span class="d-sm-inline d-none">{{ auth()->user()->name }}</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
        <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                    <div class="my-auto">
                        <img src="{{ asset('img/team-2.jpg') }}" class="avatar avatar-sm  me-3 ">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i> 13 minutes ago
                        </p>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <div class="d-flex py-1">
                <a class="dropdown-item border-radius-md" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</li>
