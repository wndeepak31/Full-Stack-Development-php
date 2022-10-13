<!-- HEADER 1 NO-TRANSPARENT -->
<header id="nav" class="header header-1 no-transparent mobile-no-transparent">
  
    <div class="header-wrapper">
        <div class="container-m-30 clearfix">
          <div class="logo-row">
            <!-- LOGO -->
            <div class="logo-container-2">
              <div class="logo-2">
                <a href="index.php" class="clearfix">
                  <img
                    src="assets/images/logo.png"
                    class="logo-img"
                    alt="Logo"
                  />
                </a>
              </div>
            </div>

            <!-- BUTTON -->
            <div class="menu-btn-respons-container">
                <button type="button"
                class="navbar-toggle btn-navbar collapsed"
                data-toggle="collapse"
                data-target="#main-menu .navbar-collapse"
                >
                <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
              </button>
            </div>
            </div>
        </div>

        <!-- MAIN MENU CONTAINER -->
        <div class="main-menu-container">
            <div class="container-m-30 clearfix">

            <!-- MAIN MENU -->
            <div id="main-menu">
                <div class="navbar navbar-default" role="navigation">

                <!-- MAIN MENU LIST -->
                <nav class="collapse collapsing navbar-collapse right-1024">
                    <ul class="nav navbar-nav">

                    <!-- HOME MENU ITEM -->
                    <li class="parent current">
                        <a href="index.php"><div class="main-menu-title">HOME</div></a>
                    </li>

                    <!-- SHOP MENU ITEM -->
                    <li class="parent">
                        <a href="product.php"><div class="main-menu-title">SHOP</div></a>
                    </li>

                    <!-- CONTACT MENU ITEM -->
                    <li id="menu-contact-info-big" class="parent megamenu">
                        <a href="contact.php"><div class="main-menu-title">CONTACT</div></a>
                    </li>
                    
                    <!-- ABOUT-US MENU ITEM -->
                    <li class="parent">
                        <a href="login.php"><div class="main-menu-title">LOGIN/REGISTER</div></a>
                    </li>

                    <!-- CART MENU ITEM -->
                    <li id="menu-cart">
                    <a href="#">
                        <div class="main-menu-title">
                            <span aria-hidden="true" class="icon_cart"></span>CART(0)
                        </div>
                    </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- END main-menu -->

          </div>
          <!-- END container-m-30 -->
        </div>
        <!-- END main-menu-container -->

        <!-- SEARCH READ DOCUMENTATION -->
        <ul class="cd-header-buttons">
          <li>
            <a class="cd-search-trigger" href="#cd-search"><span></span></a>
          </li>
        </ul>
        <!-- cd-header-buttons -->
        <div id="cd-search" class="cd-search">
          <form
            class="form-search"
            id="searchForm"
            action="page-search-results.html"
            method="get"
          >
            <input
              type="text"
              value=""
              name="q"
              id="q"
              placeholder="Search..."
            />
          </form>
        </div>
      </div>
      <!-- END header-wrapper -->
    </header>