<ul>
  <li>
    <a href="home.php">
      <i class="glyphicon glyphicon-home"></i>
      <span><?php  echo text()->translate('Dashboard'); ?></span>
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
