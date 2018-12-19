<nav class="navbar admin-navbar navbar-default navbar-inverse hidden-xs hidden-sm">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav admin-nav">
                <li><a href="/admin/home"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-files-o" aria-hidden="true"></i> Manage</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/pages">Pages</a></li>
                        <li><a href="/admin/forms">Forms</a></li>
                        <li><a href="/admin/blogs">Posts</a></li>
                        <li><a href="/admin/menu_lookups">Menus</a></li>
                        <li><a href="/admin/file_manager">Files</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/pages/add">Page</a></li>
                        <li><a href="/admin/forms/add">Form</a></li>
                        <li><a href="/admin/blogs/add">Post</a></li>
                        <li><a href="/admin/menu_lookups/add">Menu</a></li>
                    </ul>
                </li>

                <li><a href="/admin/pages/edit/4db037d8-88d4-4794-a96b-27f896e92e70"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Page</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-area-chart" aria-hidden="true"></i> MLS</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Last Updated</li>
                        <li class="dropdown-body">
                            11-28-2018 8:33am
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i> Sitewide</a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/custom_views">Layouts/Elements</a></li>
                        <li><a href="/admin/settings">Settings</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/logout.html"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
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
.admin-nav.cloned { padding:20px; background:#333; }
</style>