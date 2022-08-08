<div class="docs-navbar-sidebar-aside-body navbar-sidebar-aside-body">
    <ul id="navbarSettings" class="navbar-nav nav nav-vertical nav-tabs nav-tabs-borderless nav-sm">
        <li class="nav-item">
            <a class="nav-link <?= $sidebar == "dashboard" ? "active" : "" ?>" href="<?= site_url('admin/dashboard')?>"><i class="bi-activity nav-icon"></i>Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="<?= site_url('affiliate/logout')?>" ><i class="bi-box-arrow-left nav-icon"></i>Sign Out</a>
        </li>
    </ul>
</div>