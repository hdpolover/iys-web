<div class="docs-navbar-sidebar-aside-body navbar-sidebar-aside-body">
    <ul id="navbarSettings" class="navbar-nav nav nav-vertical nav-tabs nav-tabs-borderless nav-sm">
        <li class="nav-item">
            <a class="nav-link <?= $sidebar == "dashboard" ? "active" : "" ?>" href="<?= site_url('admin/dashboard')?>"><i class="bi-activity nav-icon"></i>Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $sidebar == "announcement" ? "active" : "" ?>" href="<?= site_url('admin/announcement')?>"><i class="bi-megaphone nav-icon"></i>Announcement</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi-people nav-icon"></i>Participant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi-wallet2 nav-icon"></i>Payment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi-envelope nav-icon"></i>Certificate</a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#snippetsSidebarNavFeaturesCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavFeaturesCollapse"><i class="bi-pie-chart nav-icon"></i>Master Data</a>

            <div id="snippetsSidebarNavFeaturesCollapse" class="nav-collapse collapse ms-2">
                <a class="nav-link" href="#">Certificate</a>
                <a class="nav-link" href="#">Payment</a>
                <a class="nav-link" href="#">Summit</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../snippets/index.html"><i class="bi-gear nav-icon"></i>Setting</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="../snippets/index.html" ><i class="bi-box-arrow-left nav-icon"></i>Sign Out</a>
        </li>
    </ul>
</div>