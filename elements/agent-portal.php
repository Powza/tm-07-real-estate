<script>
	$(function() {
		$('.agent-portal').remove();

		// Header
		$('.header__contact').append('\
			<ul>\
				<li><a href="tel:860-388-7721" class="btn"><svg role="img" title="Phone"><use xlink:href="img/tm-07/icon-pack.svg#phone"></use></svg><span class="hidden-xs">(860) 388-7721</span></a></li>\
				<li><a href="/contact" class="btn btn-primary"><svg role="img" title="Email"><use xlink:href="img/tm-07/icon-pack.svg#email"></use></svg><span class="hidden-xs">Email</span></a></li>\
        <li><a href="/" class="agent-photo"><img src="img/tm-07/office.jpg"></a></li>\
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
				<li><a href="" class="social-instagram">Instagram</a></li>\
				<li><a href="" class="social-pinterest">Pinterest</a></li>\
			</ul>\
		');

	});
</script>