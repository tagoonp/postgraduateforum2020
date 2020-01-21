<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="./"><span class="text-warning">WisniorWeb</span>.KIT</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="./">WWK</a>
  </div>
  <ul class="sidebar-menu">
    <li class="<?php add_class_active('sub-menu', 'index'); ?>"><a class="nav-link" href="index"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
    <li class="menu-header">Contents</li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 1); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-bars"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-menu-list'); ?>"><a class="nav-link" href="modules-menu-list">All menu list</a></li>
        <!-- <li class="<?php add_class_active('sub-menu', 'modules-menu-new'); ?>"><a class="nav-link" href="modules-menu-new">New menu item</a></li> -->
        <li class="<?php add_class_active('sub-menu', 'modules-menu-position'); ?>"><a class="nav-link" href="modules-menu-position">Menu position</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 2); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-edit"></i> <span>Page</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-page-list'); ?>"><a class="nav-link" href="modules-page-list">All page list</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-page-new'); ?>"><a class="nav-link" href="modules-page-new">New page</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-page-tags'); ?>"><a class="nav-link" href="modules-page-tags">Tags</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 3); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-pencil-alt"></i> <span>Post</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-post-list'); ?>"><a class="nav-link" href="modules-post-list">All post list</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-post-new'); ?>"><a class="nav-link" href="modules-post-new">New page</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-post-category'); ?>"><a class="nav-link" href="modules-post-category">Category</a></li>
      </ul>
    </li>

    <li class="<?php add_class_active('sub-menu', 'modules-user'); ?>"><a class="nav-link" href="modules-user"><i class="far fa-user"></i> <span>Users</span></a></li>
    <li class="<?php add_class_active('sub-menu', 'modules-media'); ?>"><a class="nav-link" href="modules-media"><i class="fas fa-images"></i> <span>Media</span></a></li>
    <li class="menu-header">Extra</li>
    <li class="<?php add_class_active('sub-menu', 'modules-slider'); ?>"><a class="nav-link" href="modules-slider"><i class="fas fa-caret-square-right"></i> <span>Slider</span></a></li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 4); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i> <span>Statistics</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-stat-overview'); ?>"><a class="nav-link" href="modules-stat-overview">Overview</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-stat-hits'); ?>"><a class="nav-link" href="modules-stat-hits">Hits</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-stat-pageandpost'); ?>"><a class="nav-link" href="modules-stat-pageandpost">Pages and Post</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-stat-access-location'); ?>"><a class="nav-link" href="modules-stat-access-location">Access location</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 5); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder-open"></i> <span>Sub-domain</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-subdomain-list'); ?>"><a class="nav-link" href="modules-subdomain-list">Sub-domain list</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-subdomain-add'); ?>"><a class="nav-link" href="modules-subdomain-add">Sub-domain create</a></li>
      </ul>
    </li>
    <li class="menu-header">Other</li>
    <li class="<?php add_class_active('sub-menu', 'credits'); ?>"><a class="nav-link" href="credits"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
  </ul>
  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="https://wisnior.com/wisniorweb/docs" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
      <i class="fas fa-rocket"></i> Documentation
    </a>
  </div>
</aside>
