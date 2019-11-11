<?php include('snippets/admin-bar.php'); ?>
<div class="header__meta hidden-xs hidden-sm">
  <div class="header__container container-fluid container-fluid-edge-space">
    <div class="header__nav hidden-xs hidden-sm">
      <ul id="main_navigation" class="sm sm-clean">
        <li><a href="">Home</a></li>
        <li>
          <a href="/contact">Search Properties</a>
          <ul>
            <li>
              <a href="/contact">Waterfront Properties</a>
              <ul>
                <li><a href="/contact">Search</a></li>
                <li><a href="">Header 1</a></li>
                <li><a href="">Header 2</a></li>
                <li><a href="">Header 3</a></li>
              </ul>
            </li>
            <li><a href="/admin/pages/add">Page</a></li>
            <li><a href="/admin/forms/add">Form</a></li>
            <li><a href="/admin/blogs/add">Post</a></li>
            <li><a href="/contact">Search</a></li>
          </ul>
        </li>
        <li><a href="/contact">Featured Properties</a></li>
        <li><a href="/contact">Buyer</a></li>
        <li><a href="/contact">Seller</a></li>
        <li><a href="/contact">Blog</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
    <div class="header__account">
      <ul>
        <li>
          <a href="/register.html" class="loginreg-modal-open" data-type="reg">
            Register
          </a>
        </li>
        <li>
          <a href="/login.html" class="loginreg-modal-open" data-type="log">
            Login
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<header class="header">
  <div class="header__company">
    <div class="header__container container-fluid container-fluid-edge-space">
      <div class="header__wrap">
        <div class="row header__flex__row__content">
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 header__flex">
            <div class="header__logo header__flex__center">
              <a href="/">
                <img src="/img/tm-07/logo.svg" alt="{{element[company_name=1]}}">
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-6 header__flex mls-search">
            <div class="header__search-mls-address header__flex__center">
              <form id="search_mls" method="post" action="/listings/search_by_mls_address">
                <fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>
                <div class="form-group">
                  <div class="mls-loading-results"><i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i></div>
                  <div class="ms-ctn form-control ms-no-trigger ms-ctn-focus" id="qs_suggest"><span class="ms-helper" style="display: none;">Please type 2 more characters</span>
                    <div class="ms-sel-ctn"><input type="text" class="" placeholder="Search by MLS # or Address" autocomplete="off" style="width: 469px;">
                      <div style="display: none;"></div>
                    </div>
                  </div>
                  <button id="mlsSearch" type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-xs-6 col-sm-8 col-md-4 col-lg-3 header__flex">
            <div class="header__contact header__flex__center">
              <ul class="agent-portal">
                <li>
                  <a href="tel:{{element[company_primary_phone=1]}}" class="btn">
                    <svg role="img" title="Phone">
                      <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>
                    </svg>
                    <span class="hidden-xs">860-388-7721</span>
                  </a>
                </li>
                <li>
                  <a href="/contact" class="btn btn-primary">
                    <svg role="img" title="Email">
                      <use xlink:href="/img/tm-07/icon-pack.svg#email"></use>
                    </svg>
                    <span class="hidden-xs">Email</span>
                  </a>
                </li>
              </ul>
            </div>
            <a href="#" class="header__mobile-menu-btn hidden-md hidden-lg">
              <div class="bar"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="mobile-menu hidden-md hidden-lg">
  <div class="mobile-menu__menu-container">
    <div class="mobile-menu__account">
      <ul>
        <li>
          <a href="/register.html" class="loginreg-modal-open" data-type="reg">
            Register
          </a>
        </li>
        <li>
          <a href="/login.html" class="loginreg-modal-open" data-type="log">
            Login
          </a>
        </li>
      </ul>
    </div>
    <ul id="main_navigation" class="sm sm-clean">
      <li><a href="">Home</a></li>
      <li>
        <a href="/contact">Search Properties</a>
        <ul>
          <li>
            <a href="/contact">Waterfront Properties</a>
            <ul>
              <li><a href="/contact">Search</a></li>
              <li><a href="">Header 1</a></li>
              <li><a href="">Header 2</a></li>
              <li><a href="">Header 3</a></li>
            </ul>
          </li>
          <li><a href="/admin/pages/add">Page</a></li>
          <li><a href="/admin/forms/add">Form</a></li>
          <li><a href="/admin/blogs/add">Post</a></li>
          <li><a href="/contact">Search</a></li>
        </ul>
      </li>
      <li><a href="/contact">Featured Properties</a></li>
      <li><a href="/contact">Buyer</a></li>
      <li><a href="/contact">Seller</a></li>
      <li><a href="/contact">Blog</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>
</div>