    <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar">
                <div class="container-xl">
                    <div class="row flex-column flex-md-row flex-fill align-items-center justify-between">
                        <div class="col">
                            <ul class="navbar-nav">
                                @if (auth()->user()->role === 'admin')
                                    <li class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('dashboard.index') }}">
                                            <span class="nav-link-title"> Dashboard </span>
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item {{ request()->routeIs('sensor.index') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('sensor.index') }}">
                                        <span class="nav-link-title"> Sensor </span>
                                    </a>
                                </li>
                                @if (auth()->user()->role === 'admin')
                                    <li class="nav-item {{ request()->routeIs('device.index') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('device.index') }}">
                                            <span class="nav-link-title"> Device </span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        @if (auth()->check())
                        <div class="col col-md-auto">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                                        <span class="avatar me-2 rounded" style="background-image: url('https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=random')"></span>
                                        <span>{{ auth()->user()->name }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <a href="/change-password" class="dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="18" height="18"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 15v2" />
                                                <path d="M10 21h4" />
                                                <path d="M7 10v-4a5 5 0 0 1 10 0v4" />
                                                <path d="M5 10h14v10H5z" />
                                            </svg>
                                            Ganti Password
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <form action="/logout" method="POST" class="m-0">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="18" height="18"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M10 12l10 0" />
                                                    <path d="M15 16l5 -4l-5 -4" />
                                                    <path d="M4 4v16" />
                                                </svg>
                                                Keluar
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endif

                    </div>
                </div>
            </div>
        </div>
    </header>
