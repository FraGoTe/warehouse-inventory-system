<ul>
  <li>
    <a href="home.php">
      <i class="glyphicon glyphicon-home"></i>
      <span><?php  echo text()->translate('Dashboard'); ?></span>
    </a>
  </li>
  <li>
    <a href="categorie.php" >
      <i class="glyphicon glyphicon-indent-left"></i>
      <span><?php  echo text()->translate('Categorie'); ?></span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span><?php  echo text()->translate('Product'); ?></span>
    </a>
    <ul class="nav submenu">
       <li><a href="product.php"><?php  echo text()->translate('Manage product'); ?></a> </li>
       <li><a href="add_product.php"><?php  echo text()->translate('Add product'); ?></a> </li>
   </ul>
  </li>
  <li>
    <a href="media.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span><?php  echo text()->translate('Media'); ?></span>
    </a>
  </li>
</ul>
