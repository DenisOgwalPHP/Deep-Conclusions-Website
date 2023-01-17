<div>
    <footer class="footer-one iq-bg-dark iq-over-dark-90" id="contact">
        <div class="container">
          <!-- Address -->
          <div class="footer-top">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <p class="footer-logo">
                  <img alt="img" src="{{ asset('assets/images/logo.png') }}" width="160" />
                </p>

                <p class="footer-logo">
                  It was long established as a deep learning concetrated company that has evolved into a fully fledged data science company
                </p>

                <ul class="info-share d-inline list-inline">
                  <li class="list-inline-item">
                    <a href="{{ $setting->facebook }}"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0">
                <h4 class="footer-title">Menu</h4>
                <div class="menu-footer-menu-container">
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="/">Home</a>
                    </li>
                    <li class="menu-item"><a href="/blogs">Blog</a></li>
                    <li class="menu-item"><a href="/careers">Careers</a></li>
                    <li class="menu-item"><a href="/clients">Clients</a></li>
                    <li class="menu-item">
                      <a href="/services">Service</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4">
                <h4 class="footer-title iq-rmt-30">Services</h4>
                <div class="menu-footer-menu-container">
                  <ul class="menu">
                    <li class="menu-item"><a href="#">Data Analytics</a></li>
                    <li class="menu-item"><a href="#">Managed Analytics</a></li>
                    <li class="menu-item"><a href="#">Big Data Services</a></li>
                    <li class="menu-item"><a href="#">Business Intelligence</a></li>
                    <li class="menu-item"><a href="#">Data Visualization</a></li>
                    <li class="menu-item"><a href="#">Artificial Intelligence</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-4">
                <h4 class="footer-title iq-rmt-30">Contact us</h4>

                <ul class="iq-contact">
                  <li>
                    <a href="tel:{{ $setting->phone }}"
                      ><i class="fa fa-phone"></i><span>{{ $setting->phone }}</span></a
                    >
                  </li>
                  <li>
                    <a href="mailto:{{ $setting->email }}"
                      ><i class="fa fa-envelope"></i
                      ><span>{{ $setting->email }}</span></a
                    >
                  </li>
                  <li></li>
                  <li>
                    <a
                      ><i class="fa fa-home"></i
                      ><span
                        >{{ $setting->address}}</span
                      ></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Address END -->
          <div class="c">
            <div class="pt-3 pb-3">
              <div class="row flex-row-reverse justify-content-between">
                <div
                  class="col-lg-12 col-md-12 text-lg-center text-md-center text-center"
                >
                  <span class="copyright"
                    >Copyright <script>document.write(new Date().getFullYear());</script> <a href="/">Deep Conclusions</a> All Rights
                    Reserved.</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
</div>
