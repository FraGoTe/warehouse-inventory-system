<ul>
  <li>
    <a href="admin.php">
      <i class="glyphicon glyphicon-home"></i>
      <span><?php  echo text()->translate('Dashboard'); ?></span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span><?php  echo text()->translate('User Management'); ?></span>
    </a>
    <ul class="nav submenu">
      <li><a href="group.php"><?php  echo text()->translate('Manage Groups'); ?></a> </li>
      <li><a href="users.php"><?php  echo text()->translate('Manage Users'); ?></a> </li>
   </ul>
  </li>
  <li>
    <a href="categorie.php" >
      <i class="glyphicon glyphicon-indent-left"></i>
      <span><?php  echo text()->translate('Categories'); ?></span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span><?php  echo text()->translate('Products'); ?></span>
    </a>
    <ul class="nav submenu">
       <li><a href="product.php"><?php  echo text()->translate('Manage products'); ?></a> </li>
       <li><a href="add_product.php"><?php  echo text()->translate('Add product'); ?></a> </li>
   </ul>
  </li>
  <li>
    <a href="media.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span><?php  echo text()->translate('Medias'); ?></span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
       <span><?php  echo text()->translate('Sales'); ?></span>
      </a>
      <ul class="nav submenu">
         <li><a href="sales.php"><?php  echo text()->translate('Manage Sales'); ?></a> </li>
         <li><a href="add_sale.php"><?php  echo text()->translate('Add Sale'); ?></a> </li>
     </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-signal"></i>
       <span><?php  echo text()->translate('Sales Report'); ?></span>
      </a>
      <ul class="nav submenu">
        <li><a href="sales_report.php"><?php  echo text()->translate('Sales by dates'); ?> </a></li>
        <li><a href="monthly_sales.php"><?php  echo text()->translate('Monthly sales'); ?></a></li>
        <li><a href="daily_sales.php"><?php  echo text()->translate('Daily sales'); ?></a> </li>
      </ul>
  </li>
</ul>
