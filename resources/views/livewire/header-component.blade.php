<div>
    <header class="style-one style-two" id="main-header">
        <div class="container-fluid sub-header">
          <div class="row">
            <div class="col-auto">
              <div class="number-info">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="mailto:{{ $setting->email }}">
                      <i class="fa fa-envelope"></i>{{ $setting->email }}</a
                    >
                  </li>
                  <li class="list-inline-item">
                    <a href="tel:{{ $setting->phone }}">
                      <i class="fa fa-phone"></i>{{ $setting->phone }}</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-auto col-auto ml-auto sub-main">
              <div class="social-icone">
                <ul class="list-inline">
                  <li class="d-inline">
                    <a href="{{ $setting->facebook }}"> <i class="fa fa-facebook-f"></i> </a>
                  </li>
                  <li class="d-inline">
                    <a href="{{ $setting->twitter }}"> <i class="fa fa-twitter"></i> </a>
                  </li>
                  <li class="d-inline">
                    <a href="{{ $setting->instagram }}"> <i class="fa fa-instagram"></i> </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid main-header">
          <div class="row">
            <div class="col-sm-12">
              <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                  <img
                    class="img-fluid logo"
                    src="{{ asset('assets/images/white-logo.png') }}"
                    alt="Deep Conclusions"
                  />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"
                    ><i class="ion-navicon"></i
                  ></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="menu-main-menu-container">
                    @php
                        $navlinks = array ( 'products' => 'Products', 'agri-inputs' => 'Agri-Inputs', 'blogs' => 'Blogs', 'contact-us' => 'Contact Us');
                        $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
                        $current_page = str_replace('.php', '', $current_page);  // trim off the extension
                    @endphp
                    <ul id="top-menu" class="navbar-nav ml-auto">
                      <li class="menu-item {{ $current_page == '' ? 'current-menu-item': '' }}" >
                        <a href="/">Home</a>
                      </li>
                      <li class="menu-item {{ $current_page == 'about-us' ? 'current-menu-item': '' }}">
                        <a href="{{ route('about') }}">About Us</a>
                      </li>
                      <li class="menu-item  {{ $current_page == 'services' ? 'current-menu-item': '' }}">
                        <a href="{{ route('services') }}" class="isubmenu">Services</a>
                        <i
                          class="fa fa-angle-down toggledrop"
                          aria-hidden="true"
                        ></i>
                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="#">Data Analytics</a>
                          </li>
                          <li class="menu-item">
                            <a href="#">Managed Analytics</a>
                          </li>
                          <li class="menu-item">
                            <a href="#">Big Data Services</a>
                          </li>
                          <li class="menu-item">
                            <a href="#">Data Science Consulting</a>
                          </li>
                          <li class="menu-item">
                            <a href="#">Business Intelligence</a>
                          </li>
                          <li class="menu-item">
                            <a href="#">Data Visualization</a>
                          </li>
                          <li class="menu-item">
                            <a href="#">Data Management</a>
                          </li>
                          <li class="menu-item">
                            <a href="#">Artificial Intelligence</a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item {{ $current_page == 'blogs' ? 'current-menu-item': '' }}">
                        <a href="{{ route('blogs') }}">Blogs</a>
                      </li>
                      @if (Route::has('login'))
                      @auth
                      @if (Auth::user()->utype === 'ADM')
                      <li class="menu-item">
                        <a href="#" class="isubmenu">My Account ({{ Auth::user()->name }})</a>
                        <i
                          class="fa fa-angle-down toggledrop"
                          aria-hidden="true"
                        ></i>
                        <ul class="sub-menu">
                            <li class="menu-item" >
                                <a title="Categories" href="{{ route('admin.categories') }}">Categories</a>
                            </li>
                          <li class="menu-item" >
                            <a title="services" href="{{ route('admin.services') }}">Services</a>
                        </li>

                        {{-- <li class="menu-item" >
                            <a title="Orders" href="{{ route('admin.orders') }}">Orders</a>
                        </li> --}}
                        <li class="menu-item" >
                            <a title="Orders" href="{{ route('admin.blogs') }}">Blogs</a>
                        </li>
                        <li class="menu-item" >
                            <a title="Conatct Messages" href="{{ route('admin.contact') }}">Contact Messages</a>
                        </li>

                        <li class="menu-item" >
                            <a title="Settings" href="{{ route('admin.settings') }}">Settings</a>
                        </li>
                        {{-- <li class="menu-item" >
                            <a title="Orders" href="{{ route('admin.orders') }}">Orders</a>
                        </li> --}}
                        <li class="menu-item dropdown-item" >
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                        </li>
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf

                        </form>
                        </ul>
                        @else
                        <li class="menu-item">
                            <a href="#" class="isubmenu">My Account ({{ Auth::user()->name }})</a>
                            <i
                              class="fa fa-angle-down toggledrop"
                              aria-hidden="true"
                            ></i>
                            <ul class="sub-menu">
                                <li class="menu-item dropdown-item" >
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                </li>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf

                                </form>
                            </ul>
                        </li>
                      </li>
                      @endif
                      @else
                      <li class="menu-item {{ $current_page == 'login' ? 'current-menu-item': '' }}">
                        <a href="{{ route('services') }}" class="isubmenu">Account</a>
                        <i class="fa fa-angle-down toggledrop" aria-hidden="true"></i>
                        <ul class="sub-menu">
                          <li class="menu-item dropdown-item" ><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
                          <li class="menu-item dropdown-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
                          </ul>
                      </li>
                      @endauth
                      @endif
                    </ul>
                  </div>
                </div>
                <div class="sub-main">
                  <nav aria-label="breadcrumb">
                    <div class="blue-btn button"><a href="{{ route('contact') }}">Contact Us</a></div>
                  </nav>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
</div>
