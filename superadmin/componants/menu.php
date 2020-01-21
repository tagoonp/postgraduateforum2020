<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="./index?uid=<?php echo $muid;?>"><span class="text-warning">WisniorWeb</span>.KIT</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="./index?uid=<?php echo $muid;?>">WWK</a>
  </div>
  <ul class="sidebar-menu">
    <li class="<?php add_class_active('sub-menu', 'index'); ?>"><a class="nav-link" href="index?uid=<?php echo $muid;?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
    <li class="menu-header">Contents</li>
    <li class="<?php add_class_active('sub-menu', 'modules-config'); ?>"><a class="nav-link" href="modules-config?uid=<?php echo $muid;?>"><i class="fas fa-wrench"></i> <span>Site configuration</span></a></li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 'menu'); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-bars"></i> <span>Menu</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-menu-list'); ?>"><a class="nav-link" href="modules-menu-list?uid=<?php echo $muid;?>">All menu list</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-menu-position'); ?>"><a class="nav-link" href="modules-menu-position?uid=<?php echo $muid;?>">Menu position</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 'page'); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-edit"></i> <span>Page</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-page-list'); ?>"><a class="nav-link" href="modules-page-list?uid=<?php echo $muid;?>">All page list</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-page-new'); ?>"><a class="nav-link" href="modules-page-new?uid=<?php echo $muid;?>">Create new page</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-page-group'); ?>"><a class="nav-link" href="modules-page-group?uid=<?php echo $muid;?>">Page group</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-page-tags'); ?>"><a class="nav-link" href="modules-page-tags?uid=<?php echo $muid;?>">Tags</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 'post'); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-pencil-alt"></i> <span>Post</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-post-list'); ?>"><a class="nav-link" href="modules-post-list?uid=<?php echo $muid;?>">All post list</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-post-new'); ?>"><a class="nav-link" href="modules-post-new?uid=<?php echo $muid;?>">Create new post</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-post-category'); ?>"><a class="nav-link" href="modules-post-category?uid=<?php echo $muid;?>">Category</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 'album'); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-image"></i> <span>Gallery</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-album-list'); ?>"><a class="nav-link" href="modules-album-list?uid=<?php echo $muid;?>">All album list</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-album-new'); ?>"><a class="nav-link" href="modules-album-new?uid=<?php echo $muid;?>">Create new album</a></li>
      </ul>
    </li>

    <li class="<?php add_class_active('sub-menu', 'modules-user'); ?>"><a class="nav-link" href="modules-user?uid=<?php echo $muid;?>"><i class="far fa-user"></i> <span>Users</span></a></li>
    <li class="<?php add_class_active('sub-menu', 'modules-media'); ?>"><a class="nav-link" href="modules-media?uid=<?php echo $muid;?>"><i class="fas fa-images"></i> <span>Media</span></a></li>
    <li class="menu-header">Extra</li>
    <li class="<?php add_class_active('sub-menu', 'modules-slider'); ?>"><a class="nav-link" href="modules-slider?uid=<?php echo $muid;?>"><i class="fas fa-caret-square-right"></i> <span>Slider</span></a></li>

    <li class="nav-item dropdown <?php add_class_active('main-menu', 'person'); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Personal</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-person-list'); ?>"><a class="nav-link" href="modules-person-list?uid=<?php echo $muid;?>">List of personal</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-person-group'); ?>"><a class="nav-link" href="modules-person-group?uid=<?php echo $muid;?>">Persnal group</a></li>
      </ul>
    </li>

    <li class="nav-item dropdown <?php add_class_active('main-menu', 'alumni'); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Alumni</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-alumni-list'); ?>"><a class="nav-link" href="modules-alumni-list?uid=<?php echo $muid;?>">List of Alumni</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-alumni-group'); ?>"><a class="nav-link" href="modules-alumni-group?uid=<?php echo $muid;?>">Alumni group</a></li>
      </ul>
    </li>

    <li class="nav-item dropdown <?php add_class_active('main-menu', 'stat'); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i> <span>Statistics</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-stat-overview'); ?>"><a class="nav-link" href="modules-stat-overview?uid=<?php echo $muid;?>">Overview</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-stat-hits'); ?>"><a class="nav-link" href="modules-stat-hits?uid=<?php echo $muid;?>">Hits</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-stat-pageandpost'); ?>"><a class="nav-link" href="modules-stat-pageandpost?uid=<?php echo $muid;?>">Pages and Post</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-stat-access-location'); ?>"><a class="nav-link" href="modules-stat-access-location?uid=<?php echo $muid;?>">Access location</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown <?php add_class_active('main-menu', 'subdomain'); ?>">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder-open"></i> <span>Sub-domain</span></a>
      <ul class="dropdown-menu">
        <li class="<?php add_class_active('sub-menu', 'modules-subdomain-list'); ?>"><a class="nav-link" href="modules-subdomain-list?uid=<?php echo $muid;?>">Sub-domain list</a></li>
        <li class="<?php add_class_active('sub-menu', 'modules-subdomain-add'); ?>"><a class="nav-link" href="modules-subdomain-add?uid=<?php echo $muid;?>">Sub-domain create</a></li>
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
