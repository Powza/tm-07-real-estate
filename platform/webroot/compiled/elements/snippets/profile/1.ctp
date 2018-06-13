<?php if($othAuth->sessionValid()) {  ?>

<ul>
    <?php if($othAuth->sessionValid() && ($othAuth->group('level') == 100 || $othAuth->group('level') == 200 || $othAuth->group('level') == 250)) { ?>
    <li class="account-admin">
    	<a href="/admin/home" title="Website Administration Panel">
    		<svg role="img" title="Admin">
				<use xlink:href="/img/tm-07/icon-pack.svg#admin"></use>
			</svg>
    		Admin
    	</a>
    </li>
    <?php } ?>
    <li>
    	<a href="/profile.html" title="My Profile">
    		<svg role="img" title="Profile">
				<use xlink:href="/img/tm-07/icon-pack.svg#profile"></use>
			</svg>
	    	My Profile
	    </a>
	</li>
    <li>
    	<a href="/logout.html" title="Logout">
    		<svg role="img" title="Logoff">
				<use xlink:href="/img/tm-07/icon-pack.svg#logoff"></use>
			</svg>
    		Logout
    	</a>
    </li>
</ul>

<?php } else { ?>

<ul>
    <li>
		<a href="/register.html" class="loginreg-modal-open" data-type="reg">
			<svg role="img" title="Register">
				<use xlink:href="/img/tm-07/icon-pack.svg#register"></use>
			</svg>
			Register
		</a>
	</li>
	<li>
		<a href="/login.html" class="loginreg-modal-open" data-type="log">
			<svg role="img" title="Signin">
				<use xlink:href="/img/tm-07/icon-pack.svg#signin"></use>
			</svg>
			Login
		</a>
	</li>
</ul>

<?php } ?>