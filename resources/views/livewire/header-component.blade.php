<div>
    <header class="style-one style-two" id="main-header">
        <div class="container-fluid sub-header">
          <div class="row">
            <div class="col-auto">
              <div class="number-info">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="mailto:support@iqnonicthemes.com">
                      <i class="fa fa-envelope"></i>support@iqnonicthemes.com</a
                    >
                  </li>
                  <li class="list-inline-item">
                    <a href="tel:+0123456789">
                      <i class="fa fa-phone"></i>+0123456789</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-auto col-auto ml-auto sub-main">
              <div class="social-icone">
                <ul class="list-inline">
                  <li class="d-inline">
                    <a href="#"> <i class="fa fa-facebook-f"></i> </a>
                  </li>
                  <li class="d-inline">
                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                  </li>
                  <li class="d-inline">
                    <a href="#"> <i class="fa fa-instagram"></i> </a>
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
                    alt="xamin"
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
                    <ul id="top-menu" class="navbar-nav ml-auto">
                      <li class="menu-item current-menu-item">
                        <a href="/">Home</a>
                      </li>
                      <li class="menu-item">
                        <a href="{{ route('about') }}">About Us</a>
                      </li>
                      <li class="menu-item">
                        <a href="{{ route('services') }}" class="isubmenu">Services</a>
                        <i
                          class="fa fa-angle-down toggledrop"
                          aria-hidden="true"
                        ></i>
                        <ul class="sub-menu">
                          <li class="menu-item">
                            <a href="data-analytics.html">Data Analytics</a>
                          </li>
                          <li class="menu-item">
                            <a href="managed-analytics.html">Managed Analytics</a>
                          </li>
                          <li class="menu-item">
                            <a href="big-data-services.html">Big Data Services</a>
                          </li>
                          <li class="menu-item">
                            <a href="data-science-consulting.html"
                              >Data Science Consulting</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="business-intelligence.html"
                              >Business Intelligence</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="data-visualization-services.html"
                              >Data Visualization</a
                            >
                          </li>
                          <li class="menu-item">
                            <a href="data-management.html">Data Management</a>
                          </li>
                          <li class="menu-item">
                            <a href="artificial-intelligence.html"
                              >Artificial Intelligence</a
                            >
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item">
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
                            <a title="Conatct Messages" href="{{ route('admin.contact') }}">Conatct Messages</a>
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
                      <li></li>
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
