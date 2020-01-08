<?php
	if($othAuth->sessionValid()) {  
	$profile_counts = $this->requestAction('/snippets/profile_block');
	$ss_count = 0;
	$fav_count = 0;
	if(isset($profile_counts) && !empty($profile_counts))
	{
	    $ss_count = $profile_counts['ss_count'];
	    $fav_count = $profile_counts['fav_count'];
	}
?>

<ul>
    <li>
    	<a href="/savedsearches.html" title="Saved Searches">
    		<svg role="img" title="Saved Searches">
				<use xlink:href="/img/tm-07/icon-pack.svg#saved-searches"></use>
			</svg>
	    	Saved Searches <?php if($ss_count != 0 && !empty($ss_count)) { echo '('.$ss_count.')'; } ?>
	    </a>
	</li>
    <li>
    	<a href="/favorites.html" title="Favorites">
    		<svg role="img" title="Favorites">
				<use xlink:href="/img/tm-07/icon-pack.svg#favorites"></use>
			</svg>
	    	Favorites <?php if($fav_count != 0 && !empty($fav_count)) { echo '('.$fav_count.')'; } ?>
	    </a>
	</li>
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