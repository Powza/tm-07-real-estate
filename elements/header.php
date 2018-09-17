<script>
	$(function() {
		$('.agent-portal').remove();

		// Header
		$('.header__contact').append('\
			<ul>\
				<li><a href="tel:860-388-7721"><svg role="img" title="Phone"><use xlink:href="img/tm-07/icon-pack.svg#phone"></use></svg><span class="hidden-xs">(860) 388-7721</span></a></li>\
				<li><a href="/contact" class="btn btn-primary"><svg role="img" title="Email"><use xlink:href="img/tm-07/icon-pack.svg#email"></use></svg><span class="hidden-xs">Email</span></a></li>\
			</ul>\
		');

		// Footer
		$('.footer .contact-info').append('\
			<address>\
				<dl class="dl-horizontal">\
					<dt><svg role="img" title="Address"><use xlink:href="img/tm-07/icon-pack.svg#address"></use></svg></dt>\
					<dd>37 Chalker Beach RD<br> Old Saybrook, CT 06475</dd>\
					<dt><svg role="img" title="Phone"><use xlink:href="img/tm-07/icon-pack.svg#phone"></use></svg></dt>\
					<dd><a href="tel:">Office: (860) 388-7721</a><br><a href="tel:">Cell: (860) 388-7721</a></dd>\
					<dt><svg role="img" title="Email"><use xlink:href="img/tm-07/icon-pack.svg#email"></use></svg></dt>\
					<dd><a href="/contact.html">derek@tinyminute.com</a></dd>\
				</dl>\
			</address>\
		');

		// Social
		$('.footer .social').append('\
			<ul>\
				<li><a href="" class="social-facebook">Facebook</a></li>\
				<li><a href="" class="social-twitter">Twitter</a></li>\
				<li><a href="" class="social-youtube">YouTube</a></li>\
				<li><a href="" class="social-linkedin">LinkedIn</a></li>\
				<li><a href="" class="social-googleplus">Google Plus</a></li>\
				<li><a href="" class="social-pinterest">Pinterest</a></li>\
			</ul>\
		');

	});
</script>

<header class="header">
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
								</ul>
							</li>
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
							<svg role="img" title="Register">
								<use xlink:href="img/tm-07/icon-pack.svg#register"></use>
							</svg>
							Register
						</a>
					</li>
					<li>
						<a href="/login.html" class="loginreg-modal-open" data-type="log">
							<svg role="img" title="Signin">
								<use xlink:href="img/tm-07/icon-pack.svg#signin"></use>
							</svg>
							Login
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="header__company">
		<div class="header__container container-fluid container-fluid-edge-space">
			<div class="header__wrap">
				<div class="row header__flex__row__content">
					<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 header__flex">
						<div class="header__logo header__flex__center">
							<a href="/">
								<img src="img/tm-07/logo.svg" alt="logo">
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-6 header__flex hidden-xs hidden-sm">
						<div class="header__search-mls-address header__flex__center">
							<form id="search_mls" method="post" action="/listings/search_by_mls_address">
								<fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="mls-results"><span class="mls-loading"><i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i></span></div>
											<div class="ms-ctn form-control  ms-no-trigger ms-ctn-focus" style="" id="qs_suggest"><span class="ms-helper " style="display: none;">Please type 2 more characters</span><div class="ms-sel-ctn"><input type="text" class="" placeholder="Search by MLS # or Address" autocomplete="off" style="width: 469px;"><div style="display: none;"></div></div></div>
											<button id="mlsSearch" type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</div>
							</form>
							<script type="text/javascript">
							$(document).ready(function() {

								$('.mls-results').hide();
								
								var qs_suggest = $('.header__search-mls-address #qs_suggest').magicSuggest({
									hideTrigger: true,
									minChars: 2,
									maxSuggestions: 100,
									allowFreeEntries: true,
									placeholder: 'Search by MLS # or Address',
									maxSelection: 15,
									inputCfg: {'autocomplete':'true'},
									name: 'data[Listing][mlsnumbers]',
									//data: '/listings/ajax_mlsdata',
									data: ['New York','Los Angeles','Chicago','Houston','Philadelphia','Phoenix','San Antonio','San Diego','Dallas','San Jose','Jacksonville'],
									displayField: 'name',
									renderer: function (a){ if(typeof(a.display) == 'undefined' || a.display == '') { return a.id; /*var mlsids = a.id; console.log(mlsids); return mlsids.split(",");*/ } else { return a.display; } },
									selectionRenderer: function (a){ if(typeof(a.display) == 'undefined' || a.display == '') { return a.id; /*var mlsids = a.id; console.log(mlsids); return mlsids.split(",");*/ } else { return a.display; } },
								});
								
								$(qs_suggest).on('beforeload', function() {
									$(".mls-results").show().spin({ lines: 9, length: 1, width: 4, radius: 4, speed: 1.3, left: '0px' });
								});
								
								$(qs_suggest).on('load', function() {
									$(".mls-results").hide().spin(false);
								});
								
							});
							</script>
						</div>
					</div>
					<div class="col-xs-6 col-sm-8 col-md-4 col-lg-3 header__flex">
						<div class="header__contact header__flex__center">
							<ul class="agent-portal">
								<li>
									<a href="tel:860-388-7721">
										<svg role="img" title="phone">
											<use xlink:href="img/tm-07/icon-pack.svg#phone"></use>
										</svg>
										<span class="hidden-xs">(860) 388-7721</span>
									</a>
								</li>
								<li>
									<a href="/contact" class="btn btn-primary">
										<svg role="img" title="Email">
											<use xlink:href="img/tm-07/icon-pack.svg#email"></use>
										</svg>
										<span class="hidden-xs">Email</span>
									</a>
								</li>
							</ul>
						</div>
						<a href="#" class="header__mobile-menu-btn hidden-md hidden-lg"><div class="bar"></div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="start-scroll"></div>
<div class="mobile-menu hidden-md hidden-lg">
	<div class="mobile-menu__menu-container">
		<div class="mobile-menu__account">
			<ul>
				<li class="account-admin">
					<a href="/admin/home" title="Website Administration Panel">
						<svg role="img" title="Admin">
							<use xlink:href="img/tm-07/icon-pack.svg#admin"></use>
						</svg>
						Admin
					</a>
				</li>
				<li>
					<a href="">
						<svg role="img" title="Register">
							<use xlink:href="img/tm-07/icon-pack.svg#register"></use>
						</svg>
						Register
					</a>
				</li>
				<li>
					<a href="" class="account-login">
						<svg role="img" title="Signin">
							<use xlink:href="img/tm-07/icon-pack.svg#signin"></use>
						</svg>
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
						</ul>
					</li>
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