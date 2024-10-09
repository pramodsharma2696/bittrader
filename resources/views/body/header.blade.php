<header class="header-section header-section--style2">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="{{ url('/') }}">
              <img class="dark" src="{{ asset('') }}assets/images/logo/logo-removebg.png" alt="logo" style="width: 180px;height: 51px;">
            </a>
          </div>
          <div class="menu-area">
            <ul class="menu menu--style1 custome-menu--style1">
            <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
             
              <li class="menu-item-has-children">
                <a href="#">Markets</a>
                <div class="mega-menu"> <!-- Mega Menu Wrapper -->
                <ul class="submenu">
                  <li>
                      <a class="child-title" href="{{ url('/trade-markets') }}">Trade Markets</a>
                      <ul>
                      <li><a href="{{ url('/Forex') }}">Forex</a></li>
                      <li><a href="{{ url('/Indices') }}">Indices</a></li>
                      <li><a href="{{ url('/Stocks') }}">Stocks</a></li>
                      <li><a href="{{ url('/Cryptocurrency') }}">Cryptocurrency</a></li>
                      <li><a href="{{ url('/Commodities') }}">Commodities</a></li>
                      <li><a href="{{ url('/Gold-and-Silver') }}">Gold and Silver</a></li>
                     </ul>
                 </li>
                  <li>
                    <a class="child-title" href="{{ url('/Popular-FX-Markets') }}">Popular FX Markets</a>
                    <ul>
                      <li><a href="{{ url('/EUR-USD') }}">EUR/USD</a></li>
                      <li><a href="{{ url('/GBP-USD') }}">GBP/USD</a></li>
                      <li><a href="{{ url('/USD-JPY') }}">USD/JPY</a></li>
                      <li><a href="{{ url('/USD-CHF') }}">USD/CHF</a></li>
                      <li><a href="{{ url('/Gold') }}">Gold (XAU/USD)</a></li>
                     </ul>
                  </li>
                  <li>
                    <a class="child-title" href="{{ url('/Popular-Indices') }}">Popular Indices</a>
                    <ul>
                      <li><a href="{{ url('/Wall-Street') }}">Wall Street</a></li>
                      <li><a href="{{ url('/US-SP-500') }}">US SP 500</a></li>
                      <li><a href="{{ url('/US-Tech-100') }}">US Tech 100</a></li>
                      <li><a href="{{ url('/Germany-40') }}">Germany 40</a></li>
                     </ul>
                  </li>
                  <li>
                    <a class="child-title" href="{{ url('/Popular-Stocks') }}">Popular Stocks</a>
                    <ul>
                      <li><a href="{{ url('/Tesla') }}">Tesla</a></li>
                      <li><a href="{{ url('/Amazon') }}">Amazon</a></li>
                      <li><a href="{{ url('/Apple') }}">Apple</a></li>
                      <li><a href="{{ url('/Nvidia') }}">Nvidia</a></li>
                     </ul>
                  </li>
                  <li>
                    <a class="child-title" href="{{ url('/Popular-Commodities') }}">Popular Commodities</a>
                    <ul>
                      <li><a href="{{ url('/US-Crude-Oil') }}">US Crude Oil</a></li>
                      <li><a href="{{ url('/UK-Crude-Oil') }}">UK Crude Oil</a></li>
                     </ul>
                  </li>
                </ul>
                </div>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Accounts</a>
                <div class="mega-menu"> <!-- Mega Menu Wrapper -->
                <ul class="submenu">
                  <li>
                      <a class="child-title" href="{{ url('/account-Types') }}">Account Types</a>
                      <ul>
                      <li><a href="{{ url('/standard-account') }}">Standard Account</a></li>
                      <li><a href="{{ url('/metaTrader-account') }}">MetaTrader Account</a></li>
                      <li><a href="{{ url('/raw-spread-account') }}">RAW Spread Account</a></li>
                      <!-- <li><a href="{{ url('/compare-account') }}">Compare Accounts</a></li> -->
                    </ul>
                 </li>
                  <li>
                    <a class="child-title" href="{{ url('/financial-Transparency') }}">Financial Transparency</a>
                    <ul>
                      <li><a href="{{ url('/execution') }}">Execution</a></li>
                      <li><a href="{{ url('/margin-requirements') }}">Margin Requirements</a></li>
                      <li><a href="{{ url('/rollover-rates') }}">Rollover Rates</a></li>
                     </ul>
                  </li>
                </ul>
                </div>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Platforms and Tools</a>
                <div class="mega-menu"> <!-- Mega Menu Wrapper -->
                <ul class="submenu">
                  <li>
                      <a class="child-title" href="{{ url('/trading-tools') }}">Trading Tools</a>
                      <ul>
                      <li><a href="{{ url('/currency-converter') }}">Currency Converter</a></li>
                      <li><a href="{{ url('/margin-and-pip-calculator') }}">Margin and Pip Calculator</a></li>
                      <li><a href="{{ url('/pivot-points') }}">Pivot Points</a></li>
                     </ul>
                 </li>
                </ul>
                </div>
              </li>
             
              <!-- <li>
                <a href="#">About</a>
                <ul class="submenu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="price.html">Price</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="team-2.html">Team 2</a></li>
                  <li><a href="team-details.html">Team Details</a></li>
                </ul>
              </li>

              <li>
                <a href="#">Pages</a>
                <ul class="submenu">
                  <li><a href="blogs.html">Blogs</a></li>
                  <li><a href="blog-sidebar.html">Blog - Side Bar</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                  <li><a href="signup.html">Sign Up</a></li>
                  <li><a href="signup-2.html">Sign Up 2</a></li>
                  <li><a href="signin.html">Sign In</a></li>
                  <li><a href="signin-2.html">Sign In 2</a></li>
                  <li><a href="forgot-pass.html">Reset Password</a></li>
                  <li><a href="forgot-pass-2.html">Reset Password 2</a></li>
                  <li><a href="404.html">404 Error</a></li>
                </ul>

              </li> -->
              <li>
                <a href="{{ url('/contact') }}">Contact Us</a>
              </li>
            </ul>

          </div>
          <div class="header-action">
            <div class="menu-area">
            <!-- <div class="clients-box">
                <div class="icon-box">
                            <img src="{{ asset('') }}assets/images/icon/icon-6.png" alt="Awesome Image">
                     </div>
                     <a href="#" class="trk-btn trk-btn--border">Client Portal </a>
                 </div> -->
              <div class="header-btn icon-box-text">
                <a href="signup.html" class="trk-btn trk-btn--border">
                  <span><i class="fa-solid fa-user-lock"></i> Client Portal </span>
                </a>
              </div>
              <div class="header-btn">
                <a href="signup.html" class="trk-btn trk-btn--border trk-btn--primary">
                  <span>Open an Account <i class="fa-solid fa-arrow-right"></i> </span>
                </a>
              </div>

              <!-- toggle icons -->
              <div class="header-bar d-lg-none header-bar--style1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>