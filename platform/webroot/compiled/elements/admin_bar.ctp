<?php $group = null; if($othAuth->sessionValid() && $othAuth->group('name') == "admins") { ?>
<?php
    $full_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $portal_agent = $session->read('AgentPortal.assigned');
    $pg_folder = $this->params['pass'][0];
    $agentPortals = ClassRegistry::init('Agent')->getPortalAgents();
?>
<nav class="navbar admin-navbar navbar-default navbar-inverse hidden-xs hidden-sm">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="admin-navbar-collapse">
            <ul class="nav navbar-nav admin-nav">

                <!-- Admin Dashboard -->
                <li><a href="/admin/home"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                

                <!-- Manage -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-files-o" aria-hidden="true"></i> Manage</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/pages">Pages</a></li>
                        <li><a href="/admin/forms">Forms</a></li>
                        <li><a href="/admin/blogs">Posts</a></li>
                        <li><a href="/admin/menu_lookups">Menus</a></li>
                        <li><a href="/admin/file_manager">File Manager</a></li>
                        <li><a href="/admin/subdivisions">Subdivisions</a></li>
                        <li><a href="/admin/custom_listings">Custom Listings</a></li>
                    </ul>
                </li>
                

                <!-- New -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/pages/add">Page</a></li>
                        <li><a href="/admin/forms/add">Form</a></li>
                        <li><a href="/admin/blogs/add">Post</a></li>
                        <li><a href="/admin/menu_lookups/add">Menu</a></li>
                        <li><a href="/admin/subdivisions/add">Subdivision</a></li>
                        <li><a href="/admin/custom_listings/add">Custom Listing</a></li>
                    </ul>
                </li>
                

                <!-- Custom Page -->
                <?php if(isset($page['Page']) && !empty($page['Page'])): ?>
                <li><a href="/admin/pages/edit/<?php echo $page['Page']['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Page</a></li>
                <?php endif; ?>
                

                <!-- Contact Page -->
                <?php if($full_url == FULL_BASE_URL.'/contact.html' || $full_url == FULL_BASE_URL.'/contact'): ?>
                <li><a href="/admin/settings/contact_form"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Form</a></li>
                <?php endif; ?>


                <!-- Blog -->
                <?php if($full_url == FULL_BASE_URL.'/blog.html' || $full_url == FULL_BASE_URL.'/blog'): ?>
                <li><a href="/admin/blog_settings"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Blog</a></li>
                <?php endif; ?>

                <?php if(isset($blog['Blog']) && !empty($blog['Blog'])): ?>
                <li><a href="/admin/blogs/edit/<?php echo $blog['Blog']['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Post</a></li>
                <?php endif; ?>

                <?php if(isset($category['BlogCategory']) && !empty($category['BlogCategory'])): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-pencil"></i> Edit Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/blog_categories/edit/<?php echo $category['BlogCategory']['id']; ?>">Current Category</a></li>
                        <li><a href="/admin/blog_categories">All Categories</a></li>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(strpos($_SERVER['REQUEST_URI'], 'tag') !== false):?>
                <li><a href="/admin/tags"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Tags</a></li>
                <?php endif; ?>
                

                <!-- Agents -->
                <?php if($full_url == FULL_BASE_URL.'/agents.html' || $full_url == FULL_BASE_URL.'/agents'): ?>
                <li><a href="/admin/agents"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Agents</a></li>
                <?php endif; ?>

                <?php if(isset($agent['Agent']) && !empty($agent['Agent'])): ?>
                <li><a href="/admin/agents/edit/<?php echo $agent['Agent']['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Agent</a></li>
                <?php endif; ?>
                

                <!-- Subdivisions -->
                <?php if($full_url == FULL_BASE_URL.'/subdivisions' || $full_url == FULL_BASE_URL.'/subdivisions/' || $full_url == FULL_BASE_URL.'/subdivisions/index.html'): ?>
                <li><a href="/admin/subdivisions"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Subdivisions</a></li>
                <?php endif; ?>

                <?php if(isset($cat['SubdivisionCategory']) && !empty($cat['SubdivisionCategory'])): ?>
                <li><a href="/admin/subdivision_category/edit/<?php echo $cat['SubdivisionCategory']['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Category</a></li>
                <?php endif; ?>

                <?php if(isset($projects['Subdivision']) && !empty($projects['Subdivision'])): ?>
                <li><a href="/admin/subdivisions/edit/<?php echo $projects['Subdivision']['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Subdivision</a></li>
                <?php endif; ?>
                

                <!-- Custom Listings -->
                <?php if(strpos($_SERVER['REQUEST_URI'], '/custom_listings') !== false):?>
                <li><a href="/admin/custom_listing_settings"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Settings</a></li>
                <?php endif; ?>

                <?php if(isset($listings['CustomListing']) && !empty($listings['CustomListing'])): ?>
                <li><a href="/admin/custom_listings/edit/<?php echo $listings['CustomListing']['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Listing</a></li>
                <?php endif; ?>

                
                <!-- Advanced Search -->
                <?php
                    $searchPage = array('/property-search.html', '/search-by-area.html', '/search-by-subdivision.html', '/search-by-mls-address.html', '/search-by-school.html', '/search-by-zipcode.html', '/map_search/index');
                    foreach ($searchPage as $value) {
                    if($full_url == FULL_BASE_URL.$value) :
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-pencil"></i> Edit Search</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/listing_settings">Settings</a></li>
                        <li><a href="/admin/layout_settings">Form</a></li>
                    </ul>
                </li>
                <?php endif; } ?>
                

                <!-- Listings -->
                <?php if(strpos($_SERVER['REQUEST_URI'], 'listings') !== false && !strpos($_SERVER['REQUEST_URI'], 'custom_listings') !== false):?>
                <li><a href="/admin/listing_settings"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Settings</a></li>
                <?php endif; ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-area-chart" aria-hidden="true"></i> MLS</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Last Updated</li>
                        <li class="dropdown-body">
                            <?php
                            if(isset($disclaimers[0]['Disclaimer']['body']) && !empty($disclaimers[0]['Disclaimer']['body'])) {
                                echo $time->format('m-d-Y g:ia', $disclaimers[0]['Board']['board_last_updated']);
                            }
                            ?>
                        </li>
                    </ul>
                </li>
                

                <!-- Agent Portal -->
                <?php
                    if($settings['SettingAgent']['agent_portal'] == 1) {
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book"></i> Agent Portal</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">All Portals</a>
                                <ul class="dropdown-menu">
                                <?php
                                    foreach($agentPortals as $agentPortal) {
                                        echo '<li><a href="http://'.$agentPortal['portal_url'].'">'.$agentPortal['name'].'</a></li>';
                                    }
                                ?>
                            </ul>
                        </li>
                        <?php if(isset($portal_agent) && !empty($portal_agent)): ?>
                        <li><a href="/agents/portal_debug">Portal Debug</a></li>
                        <li><a href="<?php echo $full_url; ?>?share">Share Page</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php } ?>
                

                <!-- Design -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-code"></i> Design</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/custom_views">Layouts/Elements</a></li>
                        <li><a href="/admin/styles">Stylesheets</a></li>
                        <li><a href="/admin/scripts">Javascripts</a></li>
                    </ul>
                </li>

                <!-- Sitewide -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i> Sitewide</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/settings">Settings</a></li>
                        <?php $group = null; if($othAuth->sessionValid() && $othAuth->group('name') == "admins") { ?>
                        <li><a href="/admin/system_maintenance/cache">Cache</a></li>
                        <?php } ?>
                    </ul>
                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <!-- User -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $othAuth->user('firstname') .' '. $othAuth->user('lastname'); ?>! <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout.html">Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<style>
.admin-navbar { border-radius: 0; margin: 0; min-height: 30px; border: 0; background-color: #333; }
.admin-navbar .navbar-nav a { transition: 0.2s; }
.admin-navbar .navbar-nav > li > a { padding:5px 12px; font-size: 13px; font-weight: 700; color: #eee; }
.admin-navbar .navbar-nav > li > a:hover { color: #50c6db; background: #444; }
.admin-navbar.navbar-inverse .navbar-nav > .open > a, .admin-navbar.navbar-inverse .navbar-nav > .open > a:focus, .admin-navbar.navbar-inverse .navbar-nav > .open > a:hover { background: #444; color: #50c6db; }
.admin-navbar .dropdown.open .dropdown-menu { background: #444; border-color: #444; border-radius: 0; }
.admin-navbar .dropdown.open .dropdown-menu > li > a { color: #eee; background: none; }
.admin-navbar .dropdown.open .dropdown-menu > li > a:hover { background: none; color: #50c6db; }
.admin-navbar .dropdown-menu > li > a { padding:3px 12px; }
@media (min-width: 768px) { .admin-nav { margin-left: -15px; } }
.dropdown-header { color: #50c6db; }
.dropdown-body { display: block; padding: 3px 20px; line-height: 1.42857143; color: #fff; white-space: nowrap; }
.dropdown-submenu { position: relative; }
.dropdown-submenu > .dropdown-menu { top: 0; left: 100%; margin-top: -6px; margin-left: -1px; border-radius: 0 6px 6px 6px; }
.dropdown-submenu:hover > .dropdown-menu { display: block; }
.dropdown-submenu > a:after { display: block; content: ""; float: right; width: 0; height: 0; border-color: transparent; border-style: solid; border-width: 5px 0 5px 5px; border-left-color: #ccc; margin-top: 5px; }
.dropdown-submenu:hover > a:after { border-left-color: #fff; }
.dropdown-submenu.pull-left { float: none; }
.dropdown-submenu.pull-left > .dropdown-menu { left: -100%; margin-left: 10px; border-radius: 6px 0 6px 6px; }
</style>
<?php } ?>